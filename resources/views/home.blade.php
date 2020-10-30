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

</head>
<body style="background-image: url('{{ asset('images/apropos.png')}}');background-size: cover;">
    <div id="app">
	    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"
             style="background-image: url('{{ asset('images/apropos.png')}}');
                    background-size: cover;">
            <div class="container">
                <div> 
                    <a href="{{ url('/')}} "><img src="/images/homemenu.png" alt="" width="10%"></a>
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">
                                    {{ __('SIGN IN') }}
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
                                <button  class="favorite styled" type="button" style="background-color: hotpink;">
                                <strong>
                                    {{ Auth::user()->name }} 
                                </strong>    
                                <span class="caret"></span></button>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"
                                     style="
                                            box-shadow:inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
                                            border-radius:10px;
                                            box-sizing: border-box;">
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

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9" style="">
                    <div class="card" style="margin-top:5rem;width:50rem;">
                        <div class="card-header" style="background-color: #c72c48 ;">
                            <center><strong>{{ __('MANAGE YOUR SPACE') }}</strong></center>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4" style="padding-left:3rem;">
 	                                <img src="images/filemng.png" alt="" style="width:80%;">  
                                        <br > 
                                            <a href="filemanager"style="padding-left:1.5rem;">
                                                Manage my files
                                            </a>    
                                        </br>                        
                                </div>
			                    <div class="col-md-4" style="padding-left:3rem;">
		                            <img src="images/db.svg" alt="" style="width:80%;">  
                                    <br>
                                        <a href="http://localhost/phpmyadmin">
                                         Manage my database
                                        <a>
                                    </br>   
                                </div>
  			                   <!--  <div class="col-md-3" style="padding-left:1.5rem;">
                                    <img src="images/monitoring.png" alt="" style="width:70%;">   
                                </div> -->	
                                <div class="col-md-4" style="padding-left:1.5rem;">
                                    <img src="images/subman.png" alt="" style="width:70%;">  
                                    <br>
                                    <a href="/subredircancel" >
                                        Manage my subscription
                                    </a>
                                    </br> 
                                </div>				
                            </div>

                        </div>
                    </div>
                

                </div>
            </div>
        </div>
    </div> @include('sweetalert::alert')
</body>
</html>



