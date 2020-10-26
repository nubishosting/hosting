<?php

namespace App\Http\Controllers;

use Stuff;
use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\PaymentExecution;
use PayPal\Auth\OAuthTokenCredential;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Config;
use PayPal\Rest\ApiContext;
use Illuminate\Support\Facades\Auth;

class PaypalPaymentController extends Controller
{
    public function index(){
        $nuname = Auth::user()->name;
        $plan = request('plan');
        $stuff = \App\Stuff::firstOrCreate(
            ['username' => $nuname],
            ['plan'=> $plan],
        );
        $user = \App\User::where('name',$nuname)->first();
        $user->plan = $plan;
        $user->save();
        
        return view ('paypalpayment');
    }

    public function showsuccess(){
        return view ('paypalsuccess');
    }

    public function showfailure(){
        return view ('paypalfailure');
    }

    public function __construct()
    {
        # Main configuration in constructor

            $paypalConfig = config('paypal');

        $this->apiContext = new ApiContext(new OAuthTokenCredential(
                $paypalConfig['client_id'],
                $paypalConfig['secret'])
        );

        $this->apiContext->setConfig($paypalConfig['settings']);
        
    }

    public function createpayment(Request $request)
    {  
        try
        {
                $payer = new Payer();
                $payer->setPaymentMethod("paypal");
                $plan = request('plan');
                $item1 = new Item();
                # We get all the items from the cart and parse the array into the Item object
                if ( $plan == "SINGLE"){
                    $yourplan = "SINGLE PLAN";
                    $price = "1.99";
                }else if ( $plan == "BASIC"){
                    $yourplan = "BASIC PLAN";
                    $price = "2.99";
                }else{
                    $yourplan = "PREMIUM PLAN";
                    $price = "3.99";
                }
            
                
                $item1->setName($yourplan)
                      ->setCurrency('USD')
                      ->setQuantity(1)
                      //->setSku("123123") // Similar to `item_number` in Classic API
                      ->setPrice($price);


               

                /* Amount
                Lets you specify a payment amount. You can also specify additional details such as shipping, tax.*/


                # We create a new item list and assign the items to it

                $itemList = new ItemList();
                $itemList->setItems(array($item1));

                $amount = new Amount();
                $amount->setCurrency("USD")
                    ->setTotal($price);


                /* Transaction
                A transaction defines the contract of a payment - what is the payment for and who is fulfilling it. */

                $transaction = new Transaction();
                $transaction->setAmount($amount)
                    ->setItemList($itemList)
                    ->setDescription('Payment description')
                    ->setInvoiceNumber(uniqid());

                
                /* Set the redirect url after approval/cancellation */
                
                $redirectUrls = new RedirectUrls();
                $redirectUrls->setReturnUrl(URL::to('/paypalpayment/status'),'?success=true')
                    ->setCancelUrl(URL::to('/paypalpayment/status'),'?success=false');
                
                /* $redirectUrls->setReturnUrl("/payments/paypal-status.php?success=true")
                    ->setCancelUrl("/payments/paypal-status.php?success=false"); */

 
                $payment = new Payment();
                $payment->setIntent('Sale')
                    ->setPayer($payer)
                    ->setRedirectUrls($redirectUrls)
                    ->setTransactions(array($transaction));
                
                /* Create the payment */
                
                $payment->create($this->apiContext);
                
                /** Handle the paypal redirects */
                    
                foreach ($payment->getLinks() as $link) {
                    if ($link->getRel() == 'approval_url') {
                        $redirectURL = $link->getHref();
                        break;
                    }
                }
                
                if (isset($redirectURL)) {
                    return Redirect::away($redirectURL);
                }
        }

        
        catch (\PayPal\Exception\PayPalConnectionException $ex) {

            echo $ex->getCode(); // Prints the Error Code
            echo $ex->getData(); // Prints the detailed error message 
            die($ex);
        }
            
        catch (Exception $ex) {
            die($ex);
        }
        
    }

    public function executepayment(Request $request)
        {

        try
        {
            $dataArray = $request->all();

            /* if ($dataArray['success'] == 'true'){ 

                /** If the payer ID or token aren't set, there was a corrupt response */
                if (empty($dataArray['PayerID'] ) || empty($dataArray['token'])) {
                    /** Abort the process and redirect home */
                    Session::put('error', 'There was a problem processing your payment. Please contact support.');
                    return Redirect::to('/paypalpayment/failure');
                }

                $payment = Payment::get($dataArray['paymentId'], $this->apiContext);
                $execution = new PaymentExecution();
                $execution->setPayerId($dataArray['PayerID']);

                /* Execute the payment */
                $result = $payment->execute($execution, $this->apiContext);

                if ($result->getState() == 'approved') {

                    Session::put('success', 'Your payment was successful. Thank you.');
        
                    return Redirect::to('/paypalpayment/success');
                }    
        
            /* }

            Session::put('error', 'There was a problem processing your payment. Please contact support. Payment failed');
        
            return Redirect::to('/paypaltes/failure'); */
        }

        catch (\PayPal\Exception\PayPalConnectionException $ex) {
            
            /* var_dump($ex);
            $txtx = "bababa";
            die($txtx); */
            echo $ex->getCode(); // Prints the Error Code
            echo $ex->getData(); // Prints the detailed error message 
            die($ex);
        }
            
        catch (Exception $ex) {
            die($ex);
        }   

    }
}