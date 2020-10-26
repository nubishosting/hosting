<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Nubis-Hosting') }}</title>
    <link href="images/favicon.ico" rel="shortcut icon"/>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">

</head>
<body>
<div id="loading">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light" style="background-color: pink;">
            <div class="container">
                @if (auth()->user()->id == 1)
                <a href="{{ url('/adminhome') }}">
                    <img src="images/home.png" alt=" " style=" width:15%;">
                </a> 
			    @else
			    <a href="{{ url('/home') }}">
                    <img src="images/home.png" alt=" " style=" width:15%;">
                </a> 
			    @endif
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon">
                    </span>
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
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background-image: url('{{ asset('images/bg1.jpg')}}');">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" style="background-color:pink;">
                                        {{ __('LOG OUT') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"style="background-color:pink;">
                                        @csrf
                                        </form>
                                    </div>
                                 </li>
                            @endguest
                        </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<div style="height: 610px;" >
    <div id="fm" >
        <div class="row">
            <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}">
            </script>  
        </div>
    </div>
</div>

<!--<footer style="padding-bottom:1rem; margin-top:1rem; "><center><small font-color:white>EII-2019<small><center></footer> -->
</body>
</html>


