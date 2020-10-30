
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Domain</title>
	<meta charset="UTF-8">
	<meta name="description" content="Cloud 83 - hosting template ">
	<meta name="keywords" content="cloud, hosting, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="images/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="asset/css/bootstrap.min2.css"/>
	<link rel="stylesheet" href="asset/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="asset/css/flaticon.css"/>
	<link rel="stylesheet" href="asset/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="asset/css/animate.css"/>
	<link rel="stylesheet" href="asset/css/style.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	
	
    <style>
     

$color: #eb2b63;
$color2: #25ae88;
$color3: #7fabda;
/*----------------------------------------*/

/* Template default CSS
/*----------------------------------------*/

html,
body {
	
    height: 100%;
	font-family: 'Montserrat', sans-serif;
	-webkit-font-smoothing: antialiased;
	font-smoothing: antialiased;
}

h1,
h2,
h3,
h4,
h5,
h6 {
	margin: 0;
	color: #1c1c1c;
   
	font-weight: 600;
}

h1 {
	font-size: 70px;
}

h2 {
	font-size: 36px;
}

h3 {
	font-size: 30px;
	color: white;
}

h4 {
	font-size: 24px;
}

h5 {
	font-size: 18px;
}

h6 {
	font-size: 16px;
}

p {
	font-size: 14px;
	color: #585858;
	line-height: 2;
}

img {
	max-width: 100%;
}

input,
select,
button,
textarea {
	&:focus {
		outline: none;
	}
}

a:hover,
a:focus {
	text-decoration: none;
	outline: none;
}

ul,
ol {
	padding: 0;
	margin: 0;
}

/*---------------------
  Helper CSS
-----------------------*/
/*---------------------
  Commom elements
-----------------------*/

.bg-gradient {
	/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#2e1779+0,0a0228+100 */
	background: #2e1779;
	/* Old browsers */
	/* FF3.6-15 */
	background: -webkit-linear-gradient(left, #2e1779 0%, #0a0228 100%);
	/* Chrome10-25,Safari5.1-6 */
	background: -webkit-gradient(linear, left top, right top, from(#2e1779), to(#0a0228));
	background: -o-linear-gradient(left, #2e1779 0%, #0a0228 100%);
	background: linear-gradient(to right, #2e1779 0%, #0a0228 100%);
	/* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2e1779', endColorstr='#0a0228', GradientType=1);
	/* IE6-9 */
}

/* buttons */

.site-btn {
	display: inline-block;
	border: none;
	font-size: 14px;
	font-weight: 400;
	min-width: 186px;
	padding: 17px 25px;
	border-radius: 14px;
	/*background: $color;*/
	background-color:#FFCC00;
	color: #fff;
	line-height: 1;
	cursor: pointer;
	text-align: center;
	&:hover {
		color: #fff;
	}
	&.sb-gradient {
		@extend .bg-gradient;
	}
	&.sb-line {
		background-color: transparent;
		color: $color;
		-webkit-box-shadow: inset 0 0 0 2px $color;
		box-shadow: inset 0 0 0 2px $color;
	}
}

/* Preloder */

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

@keyframes loader {
	0% {
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
		border: 4px solid #f44336;
		border-left-color: transparent;
	}
	50% {
		-webkit-transform: rotate(180deg);
		transform: rotate(180deg);
		border: 4px solid #673ab7;
		border-left-color: transparent;
	}
	100% {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg);
		border: 4px solid #f44336;
		border-left-color: transparent;
	}
}

@-webkit-keyframes loader {
	0% {
		-webkit-transform: rotate(0deg);
		border: 4px solid #f44336;
		border-left-color: transparent;
	}
	50% {
		-webkit-transform: rotate(180deg);
		border: 4px solid #673ab7;
		border-left-color: transparent;
	}
	100% {
		-webkit-transform: rotate(360deg);
		border: 4px solid #f44336;
		border-left-color: transparent;
	}
}

.elements-section {
	padding-top: 100px;
}

.el-title {
	margin-bottom: 75px;
}

.element {
	margin-bottom: 100px;
	&:last-child {
		margin-bottom: 0;
	}
}

/* Accordion */

.accordion-area .panel {
	margin-bottom: 16px;
}

.accordion-area .panel-link:after {
	content: "+";
	position: absolute;
	font-size: 15px;
	right: 26px;
	top: 0;
	line-height: 16px;
	width: 15px;
	height: 100%;
	text-align: center;
	color: #fff;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
}

}


.accordion-area .panel-header .panel-link.collapsed {
	&:after {
		content: "+";
	}
}

.accordion-area .panel-link.active:after {
	content: "-";
}

.accordion-area .panel-link.active {
	background: $color;
}

.accordion-area .panel-link,
.accordion-area .panel-link.active.collapsed {
	text-align: left;
	position: relative;
	width: 100%;
	padding: 17px 65px 17px 20px;
	padding-left: 41px;
	font-size: 15px;
	font-weight: 500;
	color: #fff;
	line-height: 1;
	cursor: pointer;
	border: none;
	min-height: 70px;
	border-radius: 13px;
	@extend .bg-gradient;
}

.accordion-area .panel-body {
	padding: 45px 2px 0;
	h4 {
		margin-bottom: 25px;
	}
	p {
		font-size: 15px;
		margin-bottom: 0;
		line-height: 1.8;
	}
	img {
		border-radius: 15px;
	}
}



/* tab */

.tab-element {
	.nav-tabs {
		border-bottom: none;
	}
	.nav-tabs .nav-link {
		border-radius: 0;
		font-size: 15px;
		color: #fff;
		font-weight: 500;
		border: none;
		padding: 24px 36px;
		margin-right: 8px;
		margin-bottom: 10px;
		@extend .bg-gradient;
		border-radius: 13px;
	}
	.nav-tabs .nav-item:last-child .nav-link {
		margin-right: 0;
	}
	.nav-tabs .nav-link.active {
		background: $color;
	}
	.tab-pane {
		padding: 35px 20px 30px;
		h4 {
			margin-bottom: 25px;
		}
		p {
			margin-bottom: 0;
		}
	}
}

/* Circle progress */



.cp-item {
	text-align: center;
	h4 {
		font-size: 14px;
		color: #7e7e7e;
	}
}





/*------------------
  Header section
---------------------*/
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

.header-section {
	position: absolute;
	width: 100%;
	padding-top: 25px;
	z-index: 99;
}

.site-logo {
	display: inline-block;
	margin-left: 50px;
}

.nav-switch {
	display: none;
}

.nav-warp {
	float: right;
}

.main-menu {
	list-style: none;
	float: right;
	padding-top: 25px;
	li {
		display: inline;
		a {
			display: inline-block;
			font-size: 16px;
			color: white;
			margin-left: 50px;
			-webkit-transition: all 0.4s;
			-o-transition: all 0.4s;
			transition: all 0.4s;
			&:hover {
				color: $color;
			}
		}
	}
}



/*------------------
  Hero section
---------------------*/

.hero-section {
	height: 835px;
	overflow: hidden;
}

.hero-content {
	display: -ms-flex;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
	height: 100%;
	position: relative;
	h2 {
		font-size: 90px;
		font-weight: 600;
		margin-bottom: 10px;
		line-height: 1;
	}
	P {
		font-size: 18px;
		line-height: 1.7;
		margin-bottom: 40px;
	}
}

.hero-rocket {
	position: absolute;
	bottom: 8px;
	right: -198px;
	img {
		position: relative;
		-webkit-animation: rocket 2s linear infinite;
		animation: rocket 2s linear infinite;
	}
}

@-webkit-keyframes rocket {
	0% {
		left: 20px;
		bottom: 20px;
	}
	25% {
		left: -20px;
		bottom: 20px;
	}
	50% {
		left: -20px;
		bottom: 0px;
	}
	75% {
		left: 0px;
		bottom: 0px;
	}
	100% {
		left: 20px;
		bottom: 20px;
	}
}

@keyframes rocket {
	0% {
		left: 20px;
		bottom: 20px;
	}
	25% {
		left: -20px;
		bottom: 20px;
	}
	50% {
		left: -20px;
		bottom: 0px;
	}
	75% {
		left: 0px;
		bottom: 0px;
	}
	100% {
		left: 20px;
		bottom: 20px;
	}
}

.features-section {
	.section-title {
		margin-bottom: 130px;
	}
	.container {
		margin-bottom: -70px;
	}
}

.feature-item {
	text-align: center;
	margin-bottom: 55px;
	.ft-icon {
		display: -ms-inline-flex;
		display: -webkit-inline-box;
		display: -ms-inline-flexbox;
		display: inline-flex;
		width: 87px;
		height: 87px;
		background: $color;
		font-size: 43px;
		color: #fff;
		-webkit-box-align: center;
		-ms-flex-align: center;
		align-items: center;
		-webkit-box-pack: center;
		-ms-flex-pack: center;
		justify-content: center;
		border-radius: 50%;
		margin-bottom: 40px;
	}
	h4 {
		margin-bottom: 28px;
	}
	&.fi-center-top {
		.ft-icon {
			-webkit-transform-origin: bottom center;
			-ms-transform-origin: bottom center;
			transform-origin: bottom center;
			-webkit-transform: scale(1.65);
			-ms-transform: scale(1.65);
			transform: scale(1.65);
			i {
				-webkit-transform: scale(0.8);
				-ms-transform: scale(0.8);
				transform: scale(0.8);
			}
		}
	}
}



/* ----------------
   Domain search
 ---------------------*/

	
/*--------------------
  Footer section
---------------------*/



/* ----------------
  About Page
---------------------*/


.styled {
border: 0;
    line-height: 2.5;
   padding: 0 20px;
	
    font-size: 1rem;
    text-align: center;
    color: #fff;
    text-shadow: 1px 1px 1px #000;
    border-radius: 10px;
    background-color: rgba(220, 0, 0, 1);
    background-image: linear-gradient(to top left,
                                      rgba(0, 0, 0, .2),
                                      rgba(0, 0, 0, .2) 30%,
                                      rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
                inset -2px -2px 3px rgba(0, 0, 0, .6);
}

.styled:hover {
    background-color: rgba(255, 0, 0, 1);
}

.styled:active {
    box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
                inset 2px 2px 3px rgba(0, 0, 0, .6);
}

/*  */
.hero-section {
	height: 835px;
	overflow: hidden;
}

.hero-content {
	display: -ms-flex;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
	height: 100%;
	position: relative;
	h2 {
		font-size: 90px;
		font-weight: 600;
		margin-bottom: 10px;
		line-height: 1;
	}
	P {
		font-size: 18px;
		line-height: 1.7;
		margin-bottom: 40px;
	}
}

.hero-rocket {
	position: absolute;
	bottom: 8px;
	right: -198px;
	img {
		position: relative;
		-webkit-animation: rocket 2s linear infinite;
		animation: rocket 2s linear infinite;
	}
}

@-webkit-keyframes rocket {
	0% {
		left: 20px;
		bottom: 20px;
	}
	25% {
		left: -20px;
		bottom: 20px;
	}
	50% {
		left: -20px;
		bottom: 0px;
	}
	75% {
		left: 0px;
		bottom: 0px;
	}
	100% {
		left: 20px;
		bottom: 20px;
	}
}

@keyframes rocket {
	0% {
		left: 20px;
		bottom: 20px;
	}
	25% {
		left: -20px;
		bottom: 20px;
	}
	50% {
		left: -20px;
		bottom: 0px;
	}
	75% {
		left: 0px;
		bottom: 0px;
	}
	100% {
		left: 20px;
		bottom: 20px;
	}
}





     </style>   


</head>
<body style="background-image: url('{{ asset('images/domain.jpg')}}');  
			background-size: cover; height:100%;">

	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
		</div>
	</div>


          <!--<div class="nav-warp">
          <div class="user-panel">
            	@guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
							{{ __('SIGN IN') }}
						</a> 
                    </li>
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
            </div>-->
			<div class="top-right links" >		
    <ul style="list-style-type: none;
               border-radius: 10px;
               padding-top: 1rem;
               padding-left: 1rem;
               padding-right: 1rem;
               overflow: hidden;
            ">   
 		@auth
		@if (auth()->user()->id == 1)
            <li style="float: right; background-color:#FFCB60; border-radius: 10px;"><a href="{{ url('/adminhome') }}">Admin</a></li>
		@else
			<li style="float: right; background-color: #FFCB60; border-radius: 10px;"><a href="{{ url('/home') }}">Home</a></li>
		@endif
        @else
            <li style="float: right; background-color: #FFCB60; border-radius: 10px;"> <a href="{{ route('login') }}">Login</a></li>
		@endauth

            <li style="float: left; background-color:  	#5A5E6B; ; ">
            	<a href="{{ url('/') }}">   Homepage |  
				</a>
			</li>
            <li style="float: left; background-color: #FFD700; ">
                <a href="{{ url('/apropos') }}">  About us |  
				</a>
			</li>
            <li style="float: left; background-color:  	#5A5E6B; ; ">
                <a href="{{ url('/domaine') }}"> Domain | 
				</a>
			</li>
            <li style="float: left; background-color: #FFD700; ">
                <a href="{{ url('/tarif') }}">  Pricing |  
				</a>
			</li>
    </ul>
    </div>		
	
     <!--Header section end -->

    <!-- Domain search section -->
	<section class="domain-search-section spad set-bg" data-setbg="img/domain-bg.jpg">
		<div class="container">
			<div class="section-title st-white">
				<img src="images/logo.png" alt="" width="10%">
					<p>
						Nubis-Hosting
					</p>
				<div class="row justify-content-center" >
            		<div class="col-md-6" style="padding-top:3rem;" >
                		<div class="card" style="margin-bottom:5rem; margin-left: 7rem;width:20rem;height:10rem;" >
                    		<div class="card-header favorite styled" style="background-image: url('{{ asset('images/bg1.jpg')}}');
																			background-size:cover;border-color:#e52f62;">
								<center><strong><h3 >
									{{ __(' Wait and see! ') }}
								</h3></strong></center>
							</div>
                         	<div class="card-body">
                                <h2 id="patiently"> 
								<center><img src="images/wait.gif" alt="" width="25%"></center>
									
								</h2>
                                <div id="results"class="form-group row justify-content-center" >
							
                            	</div>
								
                    		</div>        
                		</div>    
					</div>
					<div class="hero-content text-white">
					<div class="hero-rocket">
						<img src="asset/images/rocket.png" alt="">
     				</div> 
					</div>
					
        		</div> 
				<center>	
						<a href="domaine">
						<button  class="favorite styled" type="button" style="background-color: darkturquoise;">
							Check again
						</button>
						</a>
					</center> 		
			</div>  
			
		</div>
		
	</section>
	<!-- Domain search section end -->

	<!-- Features section end -->

	
    <script src="{{asset('js/jquery-3.4.1.js')}}"></script>
    <script>
        $( document ).ready(function() {

                var api_url = 'https://domain-availability.whoisxmlapi.com/api/v1';
                var key = 'at_XkceWtDgIRVOVUqUMOHxmTUSBswCO'; // real
                var domainName = <?php echo json_encode($domain); ?>;     

                var $results = $('#results'); 

				

            $.ajax({
                url: api_url + "?apiKey=" + key + " &domainName=" + domainName,
                contentType: "application/json",
                dataType: 'json',

				
                success: function(results){
					
                    $.each(results, function(i, result){
                        $results.append('<li>The domain "'+ result.domainName +'" is actually '+ result.domainAvailability + '</li>');
							
					});	
						  
                }
				

            })

            $(document).ajaxStart(function () {
				$("#patiently").show();
				//$document.getElementById("authentic").style.display = "none";
            });
  
            $(document).ajaxStop(function () {
                $("#patiently").hide();
			
            });
        });

    </script>

	
					
			
            		
        	

	
	<!--====== Javascripts & Jquery ======-->
	<script src="asset/js/jquery-3.2.1.min.js"></script>
	<script src="asset/js/bootstrap.min2.js"></script>
	<script src="asset/js/owl.carousel.min.js"></script>
	<script src="asset/js/circle-progress.min.js"></script>
	<script src="asset/js/main.js"></script>

	</body>
</html>
