<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Stuff;

class UnsubscribeController extends Controller
{
    public function index(){
        alert()->warning('Your account will be deleted permanently','Hope you are sure to proceed');
        return view('unsubscribe');
    }

    public function removefromexistence(){

        $usr = Auth::user()->name;
        $user = \App\User::where('name', $usr)->first();
        $uid = $user->id;
        $uname = $user->name;
        $udmn = $user->domain;
        $udbn = $user->dbname;

        exec("delete.sh $uname $udmn");

        \DB::statement("DROP DATABASE $udbn");
        \DB::statement("DROP USER $usr@'localhost'");


        $subscription = app('rinvex.subscriptions.plan_subscription')->where('user_id', $uid)->delete();
        $stuff = \App\Stuff::where('username', $usr)->delete();
        $user->delete();

        return view('/welcome');

    }
}
