
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
    <center><h2 style="color: #bbacac; padding-top:1rem;">
        CHOOSE YOUR FUTURE PLAN HERE!
        
    </h2><center>
    <div class="container" style="padding-top:2rem;">   
        <div class="row">
            <article class="pricing-column col-lg-4 col-md-4" style="">                       
                <div class="inner-box card-box"style="background-image:url('{{ asset('images/bg.jpg')}}');-webkit-box-shadow: 5px 5px 15px 5px #000000; 
box-shadow: 5px 5px 15px 5px #000000;margin-right:2rem;">
                    <div class="plan-header text-center">
                        <img src="images/single.png" alt="" style="width:35%;">  
                            <h3 class="plan-title">
                                <strong>Single</strong>
                            </h3>
                            <h2 class="plan-price">
                               1.99$
                            </h2>
                        <div class="plan-duration">
                            Per Month
                        </div>
                    </div>
                    <ul class="plan-stats list-unstyled text-center" style="padding-top:0.05rem;">  
                        <li>50 M Storage</li>
                        <li>1 Domain</li>
                        <li>1 User</li>
                    </ul>
                    
                   
                
                </div>
            </article>

            <article class="pricing-column col-lg-4 col-md-4">
                <div class="ribbon" ><span>
                    Popular</span>
                </div>
                <div class="inner-box card-box"style="background-image: url('{{ asset('images/about.png')}}'); background-size:cover ;-webkit-box-shadow: 5px 5px 15px 5px #000000; 
box-shadow: 5px 5px 15px 5px #000000;">
                    <div class="plan-header text-center">
                        <img src="images/medium.png" alt="" style="width:35%;">  
                        <h3 class="plan-title"><strong>Basic</strong></h3>
                        <h2 class="plan-price">2.99$</h2>
                        <div class="plan-duration">
                            Per Month
                        </div>
                    </div>
                    <ul class="plan-stats list-unstyled text-center" style="padding-top:0.05rem; color:white;">
                        
                        <li>100 M Storage</li>
                        <li>1 Domain</li>
                        <li>1 User</li>                          
                    </ul>
                   

                    
                </div>
            </article>

            <article class="pricing-column col-lg-4 col-md-4"> 
                <div class="inner-box card-box" style="background-color:pink; -webkit-box-shadow: 5px 5px 15px 5px #000000; 
box-shadow: 5px 5px 15px 5px #000000; margin-left:2rem;">
                    <div class="plan-header text-center">
						<div>
                            <img src="images/fusee.png" alt="" style="width:35%;"> 
                        </div>
                        <h3 class="plan-title" ><strong>Premium</strong></h3>
                        <h2 class="plan-price">3.99$</h2>
                        <div class="plan-duration">
                            Per Month
                        </div>
                    </div>
                    <ul class="plan-stats list-unstyled text-center" style="padding-top:0.05rem;">
                       
                        <li>150 M Storage</li>
                        <li>1 Domain</li>
                        <li>1 User</li>       
                    </ul>
                    
                    
                </div>
            </article>
            
        </div>
        <div style=" margin-top:-2rem; padding-bottom:1rem;"> 
            Haven't chosen a domain yet? Check a domain availability <a href="/domaine">  here. </a>
        </div> 
    </div>



    <script src="asset/js/jquery-3.2.1.min.js"></script>
    <script src="asset/js/bootstrap.min2.js"></script>
    <script src="asset/js/owl.carousel.min.js"></script>
    <script src="asset/js/circle-progress.min.js"></script>
    <script src="asset/js/main.js"></script>
</body>
<!--<footer style="
					background-image: url('{{ asset('images/foot.jpg')}}');
					background-size:cover; position: absolute; width: 101.5%;"> 
		
		<div class=""style="margin-top:2rem; margin-left:2rem; "> 
		<a href="" ><img src="images/fb.png" alt="" style="width:3%; "></a>
		<a href=""><img src="images/ig.png" alt="" style="width:3%; "></a>
		<a href=""><img src="images/in.png" alt="" style="width:3%; "></a>
		<a href=""><img src="images/tw.png" alt="" style="width:3%; "></a>
		<a href="" ><img src="images/paypal.png" alt="" style="width:5%; margin-left:50rem;"></a>
		<a href="" ><img src="images/logo-mvola.png" alt="" style="width:5%; "></a>
		<a href="" ><img src="images/airtellogo.jpg" alt="" style="width:3%; "></a>
		<a href="" ><img src="images/orange-money.jpg" alt="" style="width:3%; "></a>
		</div>
		
		
		<!--<div class=""style="margin-top:2rem;">
		<a href="" ><img src="images/paypal.png" alt="" style="width:5%; "></a>
		<a href="" ><img src="images/logo-mvola.png" alt="" style="width:5%; "></a>
		<a href="" ><img src="images/airtellogo.jpg" alt="" style="width:5%; "></a>
		<a href="" ><img src="images/orange-money.jpg" alt="" style="width:5%; "></a>
		</div>-->

		<!--<div class="row justify-content-center col-md" style="display: inline;" >
		<center>&copy Nubis Hosting</center>
        <center><a href="{{ asset('/confidentiality.pdf') }}">Confidentiality policies</a> - 
        <a href="{{ asset('/terms.pdf') }}">Terms and conditions of use</a></center>
		</div> 
		
	</footer> -->
</html>
