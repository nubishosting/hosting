<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nubis-Hosting</title>
        <link href="images/favicon.ico" rel="shortcut icon"/>
        <!-- Fonts -->
       <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
        <!-- Styles -->
	

        <style>
            html, body {
        
    		
                /*color: #636b6f;*/
                color: white;
                font-family: 'Montserrat';
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 110px;
	        font-family: 'Open Sans';
            }

            .links > a {
               /* color: #636b6F; */
                color: white;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            /*  --- */
            
   
        </style>
    </head>
    <body>
	<div id="loading" style="background-image: url('{{ asset('images/apropos.png')}}');  background-size: cover;">      
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
			            @if (auth()->user()->id == 1)
                            <a href="{{ url('/adminhome') }}">Admin</a> |
			            @else
			                <a href="{{ url('/home') }}">Home</a> |
			            @endif
                        @else
                            <a href="{{ route('login') }}">Login</a> |
			            @endif
                    @endauth
                        <a href="preregister ">Create an account</a>
                </div>
            

            <div class="content">
                <div> 
                    <img src="images/logo.png" alt="" width="35%">
                </div>
                <div class="title m-b-md" > 
                    <strong> Nubis-Hosting </strong>
                </div>
                <div class="links">
                    <a href= "apropos" >About us</a> |
		            <a href= "domaine" >Domain</a> |
                    <a href= "tarif" >Pricing</a>  
                </div>
            </div>
        </div>
    </body>
</html>
