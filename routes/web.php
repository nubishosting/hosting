<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('filemanager', function()
{
    return view('filemanager');
});

Route::get('subscriptionmanager', function()
{
    return view('subscriptionmanager');
});


Route::get('/preregister', function()
{
    return view('/preregister');
});

Route::get('/phpmyadmin', function()
{
    return view('/phpMyAdmin');
});


Route::get('domainreg', function()
{
    return view('domainreg');
});

Route::get('uni', function()
{
    return view('uni');
});

Route::get('collectdata', function()
{
    return view('collectdata');
});

Route::get('firststep', function()
{
    return view('firststep');
});

Route::get('dns', function()
{
    return view('dns');
});

Route::get('dnschange', function()
{
    return view('dnschange');
});



Route::get('preregistertwo', function()
{
    return view('preregistertwo');
});




Route::get('basicchange', function()
{
    return view('basicchange');
});

Route::get('singlechange', function()
{
    return view('singlechange');
});

Route::get('premiumchange', function()
{
    return view('premiumchange');
});

Route::get('premiumrenew', function()
{
    return view('premiumrenew');
});

Route::get('basicrenew', function()
{
    return view('basicrenew');
});

Route::get('singlerenew', function()
{
    return view('singlerenew');
});


//Auth::routes();
Auth::routes(['verify' => true]);

//
Route::get('/paypalpayment', 'PaypalPaymentController@index');
Route::post('/paypalpayment', 'PaypalPaymentController@createpayment');
Route::get('/paypalpayment/status', 'PaypalPaymentController@executepayment')->name('status');
Route::get('/paypalpayment/success', 'PaypalPaymentController@showsuccess');
Route::get('/paypalpayment/failure', 'PaypalPaymentController@showfailure');

Route::get('/paypalchangepayment', 'PaypalChangePaymentController@index');
Route::post('/paypalchangepayment', 'PaypalChangePaymentController@createpayment');
Route::get('/paypalchangepayment/status', 'PaypalChangePaymentController@executepayment')->name('changestatus');
Route::get('/paypalchangepayment/success', 'PaypalChangePaymentController@showsuccess');
Route::get('/paypalchangepayment/failure', 'PaypalChangePaymentController@showfailure');

Route::get('/paypalrenewpayment', 'PaypalRenewPaymentController@index');
Route::post('/paypalrenewpayment', 'PaypalRenewPaymentController@createpayment');
Route::get('/paypalrenewpayment/status', 'PaypalRenewPaymentController@executepayment')->name('renewstatus');
Route::get('/paypalrenewpayment/success', 'PaypalRenewPaymentController@showsuccess');
Route::get('/paypalrenewpayment/failure', 'PaypalRenewPaymentController@showfailure');


Route::post('/paypalsuccess', 'PaypalSuccessController@redir');
Route::post('/dns', 'DnsController@redir');
Route::post('/redirfromdnstocodt', 'CollectdataController@index');
Route::post('/redirfromdnstohome', 'HomeController@index');
//



Route::get('/apropos', 'AboutController@index')->name('apropos');
Route::get('/filemanager', 'FileManagerController@index')->name('filemanager');
Route::get('/pricing', 'PlanController@index')->name('pricing');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/adminhome', 'AdminHomeController@index')->name('adminhome');
Route::get('/domaine', 'DomainCheckingController@index')->name ('domaine');
Route::post('/domainreg', 'DomainCheckingController@store');
Route::get('/domainreg', 'DomainCheckingController@formtarget')->name('domainreg');

Route::post('/collectdata', 'CollectdataController@store');
Route::get('/collectdata', 'CollectdataController@index')->name('collectdata');
Route::post('/dns', 'DnsController@ajaxRequestGet')->name('ajaxget');
Route::post('/dnsi', 'DnsController@ajaxRequestPost')->name('ajaxpost');

Route::get('/renewsubscription', 'RenewSubscriptionController@index');
Route::get('/changesubscription', 'ChangeSubscriptionController@index');
Route::get('/cancelsubscription', 'CancelSubscriptionController@index');


Route::get('/redirect','SubscriptionManagerController@redirect');
Route::get('/newredirect','SubscriptionManagerController@newredirect');



Route::get('/users', '\jeremykenedy\laravelusers\app\Http\Controllers\UsersManagementController@index')->name('users');


Route::get('/subredircancel','SubscriptionManagerController@index');

Route::get('/unsubscribe','UnsubscribeController@index');
Route::get('/decidetonotcancel','HomeController@index');
Route::get('/getout','UnsubscribeController@removefromexistence');

Route::get('/tarif','PricingController@index');
Route::get('/pricing','PlanController@index');

Route::get('/refreshquota','SubscriptionManagerController@index');


/* Route::get('/createplansingle','CreatePlanController@createPlanSingle');
Route::get('/createplanbasic','CreatePlanController@createPlanBasic');
Route::get('/createplanpremium','CreatePlanController@createPlanPremium'); */