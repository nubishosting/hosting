<?php

namespace App\Http\Controllers;

use Stuff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionManagerController extends Controller
{
    public function index()
    {
        $user = Auth::user()->name;
        $stuff = \App\Stuff::where('username', $user)->first();
        $plan = $stuff->plan;
        $domain = $stuff->dname;

        $usr = \App\User::where('name', $user)->first();
        $uid = $usr->id;
        $subscription = app('rinvex.subscriptions.plan_subscription')->where('user_id', $uid)->first();
        $renewal = $subscription->ends_at;

        if ($plan == "SINGLE"){
            $size = "50M";
        }else if ($plan == "BASIC"){
            $size = "100M";
        }else{
            $size = "150M";
        }

        $op1 = shell_exec("showquota.sh $user");
        $op2 = explode("/", $op1);
        $op3 = $op2[0];
        $espace_used = trim($op3);
        return view('subscriptionmanager')->with('plan', $plan)->with('renewal', $renewal)
        ->with('domainname', $domain)->with('size', $size)->with('espace_used', $espace_used);
    }
    
    public function redirect()
    {
        $user = Auth::user()->name;
        $stuff = \App\Stuff::where('username', $user)->first();
        $plan = $stuff->plan;
        if ( $plan == "SINGLE" ){
            return view('singlechange');
        }else if ( $plan == "BASIC"){
            return view('basicchange');
        }else{
            return view('premiumchange');
        }
    }

    public function newredirect()
    {
        $user = Auth::user()->name;
        $stuff = \App\Stuff::where('username', $user)->first();
        $plan = $stuff->plan;
        if ( $plan == "SINGLE" ){
            return view('singlerenew');
        }else if ( $plan == "BASIC"){
            return view('basicrenew');
        }else{
            return view('premiumrenew');
        }
    }
}
