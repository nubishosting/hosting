<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Nubis-Hosting') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="images/favicon.ico" rel="shortcut icon"/>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>

    </style>

</head>
<div id="app">
	    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"
             style="background-image: url('{{ asset('images/apropos.png')}}');
                    background-size: cover;">
            <div class="container">
                <div> 
                    <a href="/"><img src="/images/homemenu.png" alt="" width="10%"></a>
                </div> 
               <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    <button  class="favorite styled" type="button" style="background-color:salmon;">    
                    {{ config('app.name', 'Nubis-Hosting') }}
                    </button>
                </a>-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item"style="background-color: hotpink;" >
                                <a class="nav-link" href="{{ route('login') }}">
                                    <strong>{{ __('LOGIN') }}</strong>
                                </a> 
                            </li>
                          <!--  @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <button  class="favorite styled" type="button" 
                                style="background-color: hotpink;
                                                border-radius:10px;">
                                <strong>
                                    {{ Auth::user()->name }} 
                                </strong>    
                                <span class="caret"></span></button>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"
                                     style="
                                            box-shadow:inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
                                            border-radius:10px;
                                            box-sizing: border-box;
                                            background-color:cyan;">
                                    <a class="dropdown-item" href="{{ route('logout') }}" 
                                       onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                       <center><strong> {{ __('LOG OUT') }} </strong></center>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

<body style="background-image: url('{{ asset('images/apropos.png')}}');
            background-size: cover;
            display: block;
            position: fixed;">
<div class="row justify-content-center">
    <div class="row" style="margin-top:3rem; ">
        <div class="col" style="margin-left:2rem;">
            <div class="card" style="box-shadow: 5px 10px blue;
                                    width:18rem;
                                    background-color:lemonchiffon;">
                <div class="card-body" style="">
                    <center>
                        <img src="images/preregister.png" alt="" style="width:20%;">
                    <p>First, you will fill out a registration form, 
                    This is necessary in order to be able to subscribe to a plan.</p>.
                    </center>    
                </div>    
            </div>
        </div>
        <div class="col" style="margin-left:1rem;">
        <div class="card" style="box-shadow: 5px 10px blue; 
                                width:18rem;
                                background-color:lemonchiffon;">
            <div class="card-body" style="">
                <center>
                    <img src="images/mailveri.png" alt="" style="width:20%;">
                    <p>Nubis hosting will then send you an email verification 
                    that will allow you to continue the process.</p>.
                </center>
            </div>    
        </div>
        </div>

        <div class="col" style="margin-left:1rem;" >
        <div class="card" style="box-shadow: 5px 10px blue; 
                                width:18rem;
                                background-color:lemonchiffon;">
            <div class="card-body" style="">
                    <center>
                        <img src="images/preregistertwo.png" alt="" style="width:20%;">
                    <p>You will be redirected to a page where you will choose a hosting plan.</p>.
                    </center>
                    
                </div>
            </div>    
        </div>
        </div>

        <div class="col"style="margin-top:3rem;
                                margin-left:2rem;"  >
        <div class="card" style="box-shadow: 5px 10px blue; 
                                width:18rem;
                                background-color:lemonchiffon;">
            <div class="card-body" style="">
                    <center>
                        <img src="images/payprereg.png" alt="" style="width:20%;">
                    <p>Then you will be redirected to Paypal who will take care of the 
                    payment.</p>.
                    </center>
                    
                </div>
            </div>    
        </div>
        </div>
        </div>
</div>

<div class="row justify-content-center">
    <div class="row" style="margin-top:3rem; ">
        <div class="col"style="
                                margin-left:2rem;"  >
            <div class="card" style="box-shadow: 5px 10px blue; 
                                width:18rem;
                                background-color:lemonchiffon;">
                <div class="card-body" style="">
                    <center>
                        <img src="images/prethree.png" alt="" style="width:20%;">
                    <p>You will choose and register your domain name on Nubis Hosting. </p>.
                    </center>
                    
                </div>
            </div>    
        </div>
    </div>
       
    <div class="col"style="margin-top:3rem;
                                margin-left:2rem;"  >
        <div class="card" style="box-shadow: 5px 10px blue; 
                                width:18rem;
                                background-color:lemonchiffon;">
            <div class="card-body" style="">
                    <center>
                        <img src="images/customer.png" alt="" style="width:20%;">
                    <p>Then you will confirm your subscription </p>.
                    </center>
                    
            </div>
        </div>    
    </div>
    <div class="col"style="margin-top:3rem;
                                margin-left:1rem;"  >
        <div class="card" style="box-shadow: 5px 10px blue; 
                                width:18rem;
                                background-color:lemonchiffon;">
            <div class="card-body" style="">
                    <center>
                        <img src="images/home.png" alt="" style="width:20%;">
                    <p>You will be redirected to your homepage.</p>.
                    </center>
                    
            </div>
        </div>    
    </div>
    <div class="col"style="margin-top:3rem;
                                margin-left:1rem;"  >
        <div class="card" style="box-shadow: 5px 10px #c72c48; 
                                width:18rem;
                                background-color:mistyrose;
                                opacity:0.8;">
            <div class="card-body" style="">
                    <center>
                        <img src="images/notsubman.png" alt="" style="width:20%;">
                    <p>Note: <br>You are free to CHANGE, to RENEW, to CANCEL* your plan. </br></p>
                    *Cancelling will delete your account and all your data from Nubis-Hosting
                    </center>
                    
                </div>
            </div>    
        </div>
        </div>

        


      
        


        </div>
        </div>
       
       

        






 

    

</body>
</html>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>




  
