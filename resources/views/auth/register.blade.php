@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-bottom:2rem; padding-bottom:18rem; height:550px;overflow-y:scroll; ">
                <div class="card-header" style="background-image: url('{{ asset('images/bgg.jpg')}}');
                                                background-size: cover;">
                    <center>
                        <img src="images/signup.png" alt="" style="width:5%;">
                    </center>
                    <div>
                        <center>
                            <strong>
                                {{ __('REGISTER') }}
                            </strong>
                        </center>
                    </div>
                </div>

                <div class="card-body">
                <form method="POST" action="{{ url('register') }}" name = "register">
                        @csrf

                    <!--<div class="form-group row justify-content-center">
                        <div class="col-md-8" style="background-color:peachpuff;border-radius: 10px; "> 
                        <center> Haven't chosen a domain yet? Check a domain availability 
                        <a href="/domaine" > <B>  here </B>. </a> </center>
                        </div>
                    </div> -->

                    

                    <!--<div class="form-group row justify-content-center">

                        <div class="col-md-6"
                        style ="background-color:peachpuff; border-radius: 10px;">
                       <center> 
                       
                      
                      
                        
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

                       <!--  <div class="form-group row">
                            <label for="plan" class="col-md-4 col-form-label text-md-right">
                            {{ __('Your plan') }}
                            </label> -->

                            <!-- <div class="col-md-6">
                            <input id="plan" type="text"
                                            class="form-control" name="plan" 
                                            value="{{$plan ?? ''}}" readonly>
                                          
                            </div> -->
                            <!-- <div class="col-md-6">
                            <input id="plan" type="text"
                                            class="form-control" name="plan" 
                                            value="" >
                                          
                            </div>
                        </div> -->
                        

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                                {{ __('Name') }}
                            </label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">
                                {{ __('E-Mail Address') }}
                            </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
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

                                <input type="checkbox" onclick="myFunction()">
                                <label style="font-size:13px;">  Show Password</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="confirmpassword" type="password" class="form-control" placeholder="Confirm your password"name="password_confirmation" required autocomplete="new-password">
                                
                                <input type="checkbox" onclick="myFunctionConfirm()">
                                <label style="font-size:13px;">  Show Password</label>
                                </div>
                        </div>

                      <!--   <div    class="form-group row justify-content-center" >
                            <div class="col-md-6"style="background-color:peachpuff;
                                                        border-radius: 10px;
                                                        border-top-style:groove;"> 
                                <center><B>~ ABOUT YOUR SITE ~</B></center>
                            </div> 
                        </div>

                    <div class="form-group row">
                        <label for="domain" class="col-md-4 col-form-label text-md-right">
                            {{ __('Domain') }} 
                        </label>

                        <div class="col-md-6">
                            <input id="domain" type="text" class="form-control " value="" 
                                       name="domain" >
                        </div>
                       
                    </div>

                    <div class="form-group row">
                        <label for="dbname" class="col-md-4 col-form-label text-md-right">{{ __('Database name') }}</label>

                        <div class="col-md-6">
                            <input id="dbname" type="text" class="form-control" placeholder="Put here the name of your database"name="dbname" required>
                        </div>
                    </div> -->

           
			 <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <!--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>-->

                                    <label class="form-check-label" for="remember">
                                        {{ __(' Submitting means you agree with') }}<a href="{{ asset('/terms.pdf') }}"> terms and conditions </a>  {{ __(' of') }} <a href="/"> Nubis Hosting </a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4" style="margin-bottom:2rem;">
                            
                            <?php
                           /* if(isset($_GET['plan']))  
                            {echo "<input class=\"btn btn-primary\"type=\"submit\" name=\"validation\" value=\"Subscribe\"  />";}
                            else
                            echo "<input class=\"btn btn-primary\"type=\"submit\" name=\"validation\" value=\"Subscribe\" disabled/>";
                                
                            */?>
                            
                            <button type="submit" class="btn btn-primary">

                                <strong>{{ __('REGISTER') }}</strong>
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

<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
} 
function myFunctionConfirm() {
  var y = document.getElementById("confirmpassword");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
} 


</script>
