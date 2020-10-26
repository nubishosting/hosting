<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatePlanController extends Controller
{
    public function index(){
        return view('preregister');
    }
    
    public function createPlanSingle(){
        $rinvplan = app('rinvex.subscriptions.plan')->create([
            'name' => 'Single',
            'description' => 'Single plan',
            'price' => 1.99,
            'signup_fee' => 0.00,
            'invoice_period' => 1,
            'invoice_interval' => 'month',
            'trial_interval' => 'day',
            'sort_order' => 1,
            'currency' =>'USD',
        ]);
        echo("Hey!");
    }



    public function createPlanBasic(){
        $rinvplan = app('rinvex.subscriptions.plan')->create([
            'name' => 'Basic',
            'description' => 'Basic plan',
            'price' => 2.99,
            'signup_fee' => 0.00,
            'invoice_period' => 1,
            'invoice_interval' => 'month',
            'trial_interval' => 'day',
            'sort_order' => 1,
            'currency' =>'USD',
        ]);
        
    }

    public function createPlanPremium(){
        $rinvplan = app('rinvex.subscriptions.plan')->create([
            'name' => 'Premium',
            'description' => 'Premium plan',
            'price' => 3.99,
            'signup_fee' => 0,
            'invoice_period' => 1,
            'invoice_interval' => 'month',
            'trial_interval' => 'day',
            'sort_order' => 1,
            'currency' =>'USD',
        ]);
    }
}
