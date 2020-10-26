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
    .fancy {
  text-align: center;
  box-sizing: border-box;
  width     : 150px;
  height    : 150px;
  padding   : 80px 1em 0 1em;
  margin    : 0 100px;
  position: relative;
  background-color: #A4C9CF;
  border-radius: 100% 100% 0 0;
}
.fancy::before,
.fancy::after {
  content: '';
  position: absolute;
  bottom  : 0;
  z-index : -1;

  background-color: #A4C9CF;
  border-radius: 100%;
}

.fancy::before {
  
  width  : 125px;
  height : 125px;
  left    : -80px;
  border-bottom-right-radius: 0;
}

.fancy::after {
  width  : 100px;
  height : 100px;
  right   : -60px;
  border-bottom-left-radius: 0;
}


/*   -- */
.glow-on-hover {
    width: 220px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 0.9;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: lemonchiffon;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}



    </style>

</head>
<div id="app">
	<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"
         style="background-image: url('{{ asset('images/apropos.png')}}');
                    background-size: cover;">
        <div class="container">
            <div> 
                <a href="/home">
                    <img src="/images/home.png" alt="" width="20%">
                </a>
            </div> 
     
                    <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            {{ __('SIGN IN') }}
                        </a> 
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <button  class="favorite styled" type="button" style="background-color: hotpink;">
                                <strong>
                                    {{ Auth::user()->name }} 
                                </strong>    
                                <span class="caret">
                                </span>
                            </button>
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
                                <center><strong> 
                                    {{ __('LOG OUT') }} 
                                </strong></center>
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
    <div class="row" style="margin-left:2rem;">
        <div class="glow-on-hover" >
            <form method="get" action="/unsubscribe">
                <button class="" type="submit" style="width:15rem;
                                        height:4rem;
                                        border-color:orange;">
                    Cancel
                </button>
            </form>
        </div>
        <div class="row">
            <div class="glow-on-hover"style="margin-left:2rem;">
                <form method="get" action="/redirect">
                    @csrf
                    <button class="" type="submit" style="width:15rem;
                                        height:4rem;
                                        border-color:orange;">
                    Change
                    </button>
    
    
    </form>
    </div>
    </div>


    <div class="row glow-on-hover"style="margin-left:2rem;">
    <form method="get" action="newredirect">
    @csrf
    <button type="submit" style="width:15rem;
                                          height:4rem;
                                          border-color:orange;">
        Renew
    </button>
    </form>
    </div>

    <div class="fancy" style="float:right; 
                              margin-left:24rem;
                              margin-top:0.5rem;">Your plan is: <h3>{{ $plan ?? '' }} </h3></div> 
    






    <div class="row justify-content-center">
   
    
    <div class="row" style="margin-top:3rem; ">
        <div class="col" style="padding-left:2rem;">
            <div class="card" style="box-shadow: 5px 10px blue;
                                    width:18rem;
                                    background-color:lemonchiffon;">
                <div class="card-body" style="">
                    <center>
                        <img src="images/freespa.png" alt="" style="width:20%;">
                    <p>Used Space: {{ $espace_used }} </p>.
                    
                    </center> 
                    <form action="/refreshquota" method="get">
                        <center>
                        <button type="submit" style="background-color:hotpink;">
                            Refresh
                        </button>
                        </center>
                    </form>   
                </div>    
            </div>
        </div>
        <div class="col">
        <div class="card" style="box-shadow: 5px 10px blue; 
                                width:18rem;
                                background-color:lemonchiffon;">
            <div class="card-body" style="">
                <center>
                    <img src="images/renewal.png" alt="" style="width:18%;">
                    <p>Subscription's end date:<br> {{ $renewal ?? '' }} </br></p>.
                </center>
            </div>    
        </div>
        </div>

        <div class="col" >
        <div class="card" style="box-shadow: 5px 10px blue; 
                                width:18rem;
                                background-color:lemonchiffon;">
            <div class="card-body" style="">
                    <center>
                        <img src="images/domn.png" alt="" style="width:27%;">
                    <p>Your domain name: <br> {{ $domainname ?? '' }}</br> </p>.
                    </center>
                    
                </div>
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
                        <img src="images/notsubman.png" alt="" style="width:23%;">
                    
                  
                    <p>hard limit: {{ $size }}</p>
                    </center>
                    
                </div>
            </div>    
        </div>
        </div>
       {{--  <div class="col">
        <div class="fancy" style="margin-top:2rem; 
                                opacity: 0.85;">Your space:<h3> {{ $size ?? '' }} </h3></div> 
        </div>
         --}}

        






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




  
