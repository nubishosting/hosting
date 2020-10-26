<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaypalRenewSuccessController extends Controller
{
    public function index(){
        return view('paypalrenewsuccess');
    }
}
