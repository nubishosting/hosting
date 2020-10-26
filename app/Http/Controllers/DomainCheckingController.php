<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DomainCheckingController extends Controller
{
   public function index () {
       return view ('domaine');//
      

   }

   public function store() {
       $dns = request ('domain');
       return redirect()->route('domainreg', compact('dns'));
       }
    
    public function formtarget(){
        $dom = request('dns');
       // dd($dom);
        return view('domainreg',['domain' => $dom]);
    }   
}
