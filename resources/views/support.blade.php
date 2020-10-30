
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="" content="">
        <meta name="" content="">
        <link rel="shortcut icon" href="/images/favicon.ico">
        <title>Nubis-Hosting</title>
        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="asset/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
	<style>
       
        

        li a {
        display: block;
        color: white;
        border-radius: 10px;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }

        li a:hover {
        background-color: #FFF0F5;
        }
    #preloder {
	position: fixed;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	z-index: 999999;
	background: #000;
    }

    .loader {
	width: 40px;
	height: 40px;
	position: absolute;
	top: 50%;
	left: 50%;
	margin-top: -13px;
	margin-left: -13px;
	border-radius: 60px;
	animation: loader 0.8s linear infinite;
	-webkit-animation: loader 0.8s linear infinite;
    }

   
</style>

<body id="loading"  style="background-image: url('{{ asset('images/apropos.png')}}'); background-size: cover;
                            height:108%;">
    <div id="preloder">
		<div class="loader">
        </div>
	</div>
    <!--<nav class="navbar navbar-expand-md navbar-light"  >
        <a href="/domaine" class="site-logo">
            <img src="images/homemenu.png" alt="" width="8%">
        </a>
    </nav>-->
    <div class="top-right links" style="">
    <ul style="list-style-type: none;
               border-radius: 10px;
               padding-top: 1rem;
               padding-left: 1rem;
               padding-right: 1rem;
               overflow: hidden;
            ">   
                 
                    @auth
			            @if (auth()->user()->id == 1)
                        <li style="float: right; background-color:#DB0073; border-radius: 10px;"><a href="{{ url('/adminhome') }}">Admin</a></li>
			            @else
			            <li style="float: right; background-color: #DB0073; border-radius: 10px;"><a href="{{ url('/home') }}">Home</a></li>
			            @endif
                        @else
                        <li style="float: right; background-color: #DB0073; border-radius: 10px;"> <a href="{{ route('login') }}">Login</a></li>
			            
                    @endauth
                

                <li style="float: left; background-color:  #2E006C; ">
                <a href="{{ url('/') }}">   Homepage |  </a></li>
                <li style="float: left; background-color:#FF007F; ">
                <a href="{{ url('/apropos') }}">  About us |  </a></li>
                <li style="float: left; background-color:  	#2E006C; ">
                <a href="{{ url('/domaine') }}"> Domain | </a></li>
                <li style="float: left; background-color: #FF007F; ">
                <a href="{{ url('/tarif') }}">  Pricing |  </a></li>
                </ul>
    </div>
    
    <div class="container" style="padding-top:2rem;">   
        <div class="row justify-content-center">
            <div class="col-md-8">
            <div class="card" style="margin-top:4rem; margin-bottom:1rem;box-shadow: 5px 10px  #FF007F;">
                <div class="card-header" style="background-image: url('{{ asset('images/bg.jpg')}}'); background-size:cover;">
                    <center>
                        <img src="images/contactus.png" alt="" style="width:10%;"> 
                    </center>
                    <center>
                        Contact us
                    </center>
                </div>
    
                <div class="card-body">


                    <div class=row style="margin-left:1rem; padding-bottom:0.5rem;">
                        <div class="col-md-6">
                            <img src="images/phone.png" alt="" style="width:15%;"> 
                                +261 34 252 01 - +261 32 252 01
                        </div>
                        <div class="col-md-6">
                            <img src="images/email.png" alt="" style="width:15%;"> 
                                nubishosting@gmail.com
                        </div>

                    </div>   
                         

                    <div class=row style="margin-left:1rem; padding-bottom:0.5rem;">
                        <div class="col-md-6">
                            <img src="images/github.png" alt="" style="width:15%;"> 
                                NubisHosting
                        </div>
                        <div class="col-md-6">
                            <img src="images/facebook.png" alt="" style="width:15%;"> 
                                NubisHosting
                        </div>
                        
                    </div>   
                         

                    <div class=row style="margin-left:1rem;">
                        <div class="col-md-6">
                            <img src="images/twitter.png" alt="" style="width:15%;"> 
                                nu.hosting
                        </div>
                        <div class="col-md-6">
                            <img src="images/youtube.png" alt="" style="width:15%;"> 
                                Nubis-H
                        </div>
                       
                    </div>   

                    <div class=row>
                        
                    </div>  
                         
                        
                </div>
                   
                      
                       
                        
                        
                
                </div>
                        
                   
               
            </div>

            
        </div>
       
    </div>



    <script src="asset/js/jquery-3.2.1.min.js"></script>
    <script src="asset/js/bootstrap.min2.js"></script>
    <script src="asset/js/owl.carousel.min.js"></script>
    <script src="asset/js/circle-progress.min.js"></script>
    <script src="asset/js/main.js"></script>
</body>

</html>
