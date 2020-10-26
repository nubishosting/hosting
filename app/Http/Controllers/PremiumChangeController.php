<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PremiumChangeController extends Controller
{
    public function index(){
        return view ('premiumchange');
    }
}
