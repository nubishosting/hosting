<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaypalChangeSuccessController extends Controller
{
    public function index(){
      
        $user = Auth::user()->name;
        $stuff = \App\Stuff::where('username', $user)->first();
        $plan = $stuff->plan;

        exec("changesubscription.sh $user $plan");
        return view ('paypalchangesuccess');
    }
}
