<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaypalSuccessController extends Controller
{

    public function index(){
        return view ('paypalsuccess');
    }

    public function redir(){
        return view ('/dns');
    }
}
