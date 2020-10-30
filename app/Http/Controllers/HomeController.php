<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
       $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userid = Auth::user()->id;
        $endingsub = app('rinvex.subscriptions.plan_subscription')->findEndingPeriod(3)->where('user_id', $userid)->get();
        //dd($endingsub);
        if ($endingsub->isEmpty()) {
            return view('home');
        } else {
            alert()->info('You subscription is about to end','Please check your "Manage your subscription section" to see your exact end date.');
            return view('home');
        }
    }
}
