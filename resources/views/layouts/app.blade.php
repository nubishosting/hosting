<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Nubis-Hosting') }}</title>
    <link href="/images/favicon.ico" rel="shortcut icon"/>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    
<div id="loading" style="background-image: url('{{ asset('images/prereg.png')}}'); background-size: cover;">
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" 
             style="background-image: url('{{ asset('images/prereg.png')}}');
                    background-size: cover;">
            <div class="container">
               <!-- <a class="navbar-brand" href="{{ url('/') }}">-->  
               <div> 
              <a href="{{ url('/')}} "><img src="/images/homemenu.png" alt="" width="10%"></a>

               </div>
                
                

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link favorite styled" href="{{ route('login') }}">
                                <button  class="favorite styled" type="button" style="background-color:salmon;">
                                <strong>{{ __('LOGIN') }}</strong>
						        </button></a> 
                            </li>
                          @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="preregister">
                                    <button  class="favorite styled" type="button" style="background-color:pink;">
                                <strong>{{ __('REGISTER') }}</strong>
						        </button></a>
                            @endif 
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('LOG OUT') }}
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

        <main class="py-4">
            @yield('content')

        </main>

    </div>

</body>

</html>

