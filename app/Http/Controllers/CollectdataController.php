<?php

namespace App\Http\Controllers;

use Stuff;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CollectdataController extends Controller
{   

    public function index()
    {       
        $user = Auth::user()->name;
        $email = Auth::user()->email;
        $stuff = \App\Stuff::where('username',$user)->first();
        $plan = $stuff->plan;
        $dns = $stuff->dname;

        return view('collectdata')->with('usr', $user)->with('mail',$email)->
                with('plan',$plan)->with ('dnm',$dns);      
      
       
    }

    

    public function store(){
        $name = Auth::user()->name;
        $dbname = request ('dbname');
        $stuff = \App\Stuff::where('username',$name)->first();
        $stuff->dbpwd = $dbname;
        $stuff->save();
        $client = \App\User::where('name',$name)->first();
        $client->dbname = $dbname;
        $client->save();


     
        $mail = Auth::user()->email;
        $stuff = \App\Stuff::where('username',$name)->first();
        $plan = $stuff->plan;
        $domain = $stuff->dname;

       
        /* $dbpwd = "mypasswd123"; */
        $dbpwd = Str::random(8);
        //error_log($dbpwd);
       

       exec("sudo Registerscript.sh $name $domain $plan $mail $dbpwd");

        $new_db = \DB::statement("CREATE DATABASE $dbname");
        \DB::statement("CREATE USER $name@'localhost' IDENTIFIED BY '$dbpwd' ");
        \DB::statement("GRANT ALL PRIVILEGES ON $dbname.* TO $name@'localhost'");
        \DB::statement("FLUSH PRIVILEGES");

        $user = Auth::user();


        if ( $plan=='SINGLE'    )
            {
            $rinvplan = app('rinvex.subscriptions.plan')->where('slug','single')->first();
            }elseif ( $plan=='BASIC' ){
                $rinvplan = app('rinvex.subscriptions.plan')->where('slug','basic')->first();
            }else{
                $rinvplan = app('rinvex.subscriptions.plan')->where('slug','premium')->first();
            }
        $user->newSubscription('main', $rinvplan);
        
        return view('/home');
    }

}
