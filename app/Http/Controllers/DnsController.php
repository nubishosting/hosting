<?php

namespace App\Http\Controllers;

use Stuff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DnsController extends Controller
{
    public function index()
    {
        return view('dns');
    }

    public function ajaxRequestGet()
    {
       

         $daisy = $_POST['drpinp'];
        $ch = curl_init();
        $token = "Authorization: Bearer vw1haFdlr8r055Q7ECY8CfFSdANXk45j";

        curl_setopt($ch, CURLOPT_URL,"https://api.sandbox.dnsimple.com/v2/1449/registrar/domains/".$daisy."/check");
 
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            $token,
            'Accept: application/json',
            'Content-Type: application/json'
                ));  
        
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedpost);
        $server_output = curl_exec ($ch);
        

        if ( $server_output === false ){
            echo curl_error($ch);
        }
        else {
            Header('Content-Type: application/json');
            echo $server_output;
            //var_dump($server_output);
        }
        curl_close ($ch);
        die;
        
    } 


    public function ajaxRequestPost()
    {
       

         $daisy = $_POST['drpinp'];
        $ch = curl_init();
        $token = "Authorization: Bearer vw1haFdlr8r055Q7ECY8CfFSdANXk45j";
        $post = [
            'registrant_id' => '3541',
        ];
        $encodedpost = json_encode($post);

        curl_setopt($ch, CURLOPT_URL,"https://api.sandbox.dnsimple.com/v2/1449/registrar/domains/".$daisy."/registrations");
 
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        
       //curl_setopt($ch, CURLOPT_URL, "https://acvc.wprj.org/wp-json/");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            $token,
            'Accept: application/json',
            'Content-Type: application/json'
                ));  
        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedpost);
        $server_output = curl_exec ($ch);
        

        if ( $server_output === false ){
            echo curl_error($ch);
        }
        else {
            Header('Content-Type: application/json');
            echo $server_output;
            $nuname = Auth::user()->name;
            $stuff = \App\Stuff::where('username',$nuname)->first();
            $stuff->dname = $daisy;
            $stuff->save();
            $user = \App\User::where('name',$nuname)->first();
            $user->domain = $daisy;
            $user->save();

        }
        curl_close ($ch);
        die;
        
    } 



    
}
