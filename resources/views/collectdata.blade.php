@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-bottom:2rem; padding-bottom:18rem;overflow-y:scroll; height:550px; ">
                <div class="card-header" style="background-image: url('{{ asset('images/bg.jpg')}}');
                                                background-size: cover;">
                    <center>
                        <img src="images/collectdata.png" alt="" style="width:5%;">
                    </center>
                    <div>
                        <center>
                            <strong>
                                {{ __('LAST STEP') }}
                            </strong>
                        </center>
                    </div>
                </div>

                <div class="card-body">
                <form method="POST" action="{{ url('collectdata') }}" name = "register">
                <!--<form method="POST" action="/process">-->
                        @csrf

                    

                    

                    <!--<div class="form-group row justify-content-center">

                        <div class="col-md-6"
                        style ="background-color:peachpuff; border-radius: 10px;">
                       <center> 
                       
                       <?php 
                      
                           // echo ('You have to pick a plan 
                            // <a href="tarif"><B>here</B></a> first');
                        ?> 
                        </center>
                        </div>
                    </div>-->

                    <div class="form-group row justify-content-center" >
                            <div class="col-md-6"style="background-color:peachpuff;
                                                        border-radius: 10px;
                                                        border-top-style:groove;"> 
                                <center><B>~ ABOUT YOUR ACCOUNT~</B></center>
                            </div> 
                        </div> 

                    <div class="row" style="margin-bottom:1rem;">
                        <div  class="col-md-4  text-md-right">{{ __('Your plan:') }}</div>

                        <div class="col-md-6" style="">
                           {{ $plan }}
                        </div>
                    </div>

                        <div class="row"style="margin-bottom:1rem;">
                            <div class="col-md-4  text-md-right">
                                {{ __('Your name:') }}
                            </div>

                            <div class="col-md-6">
                            {{ $usr }} 
                            </div>
                        </div>

                        <div class="row"style="margin-bottom:1rem;">
                            <div class="col-md-4 text-md-right">
                                {{ __('Your E-Mail Address:') }}
                            </div>

                            <div class="col-md-6">
                               {{ $mail }}
                            </div>
                        </div>

                        <!--<div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">
                                {{ __('Password') }}
                            </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm your password"name="password_confirmation" required autocomplete="new-password">
                                </div>
                        </div>-->

                        <div    class="form-group row justify-content-center" >
                            <div class="col-md-6"style="background-color:peachpuff;
                                                        border-radius: 10px;
                                                        border-top-style:groove;"> 
                                <center><B>~ ABOUT YOUR SITE 
                              
                                ~</B></center>
                            </div> 
                        </div>

                    <div class="row"style="margin-bottom:1rem;">
                        <div class="col-md-4 text-md-right">
                            {{ __('Your Domain name:') }}
                        </div>

                            <div class="col-md-6">
                                {{ $dnm }}
                            </div>
                        </div>

                    <div class="form-group row">
                        <label for="dbname" class="col-md-4 col-form-label text-md-right">
                        {{ __('Your Database name:') }}</label>

                        <div class="col-md-6">
                            <input id="dbname" type="text" class="form-control" placeholder="Put here the name of your database"name="dbname" required >
                        </div>
                    </div>


			 <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    
                                    <label class="form-check-label" >
                                        {{ __(' I still agree with') }}<a href="{{ asset('/terms.pdf') }}"> terms and conditions </a>  {{ __(' of') }} <a href="/"> Nubis Hosting </a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4" style="margin-bottom:2rem;">
                            
                           
                            <button type="submit" class="btn btn-primary">

                               <strong> {{ __('CONFIRM SUBSCRIPTION') }} </strong>
                            </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
