
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
	font-size: 1rem;
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
/* buttons */

.site-btn {
	display: inline-block;
	border: none;
	font-size: 14px;
	font-weight: 400;
	min-width: 186px;
	padding: 17px 25px;
	border-radius: 14px;
	background: $color;
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






/* ----------------
   Domain search
 ---------------------*/

	
/*--------------------
  Footer section
---------------------*/
/*------------------
  Hero section
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



@keyframes slideBottomRight {
  0% {
    transform: translate(-50%, 0) rotate(-45deg);
  }
  100% {
    transform: translate(-50%, 1200px) rotate(-45deg);
  }
}
     </style>   

	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body style="background-image: url('{{ asset('images/domain.jpg')}}');  background-size:cover;">
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
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
            <li style="float: right; background-color: deepskyblue; border-radius: 10px;"><a href="{{ url('/adminhome') }}">Admin</a></li>
		@else
			<li style="float: right; background-color: deepskyblue; border-radius: 10px;"><a href="{{ url('/home') }}">Home</a></li>
		@endif
        @else
            <li style="float: right; background-color: deepskyblue; border-radius: 10px;"> <a href="{{ route('login') }}">Login</a></li>
		@endauth

            <li style="float: left; background-color: deepskyblue; ">
            	<a href="{{ url('/') }}">   Homepage |  
				</a>
			</li>
            <li style="float: left; background-color: blue; ">
                <a href="{{ url('/apropos') }}">  About us |  
				</a>
			</li>
            <li style="float: left; background-color: deepskyblue; ">
                <a href="{{ url('/domaine') }}"> Domain | 
				</a>
			</li>
            <li style="float: left; background-color: blue; ">
                <a href="{{ url('/tarif') }}">  Pricing |  
				</a>
			</li>
    </ul>
    </div>		
	</header>
     <!--Header section end -->
	
    <!-- Domain search section -->
	<section class="domain-search-section spad set-bg" data-setbg="img/domain-bg.jpg">
		<div class="container">
			<div class="section-title st-white">
				<img src="images/logo.png" alt="" width="8%">
				<p>Nubis-Hosting</p>
				<h2>CHECK A DOMAIN <h2>
			</div>
			<div class="domain-form-warp" style="padding-left:270px; margin-top:-2rem;">
				<form class="domain-search-form" action="/domainreg" method="POST">
                @csrf
                <input type="text" style="width:400px;" id="dns" name="domain" placeholder="Enter a domain name and check if it's still avalaible" pattern="[a-z0-9.-]+\.[a-z]{2,}$" required>
					<button type="submit" class="favorite styled" style="opacity:0.8;">
						Check
					</button>
				</form>	
			</div>
			<div class="fancy-panel"
					 style="width: 400px;
							height: 200px;
							background: orange;
							border-radius: 5px;
							margin: 0 auto;
							opacity: 0.8;
							text-align: center;
							position: relative;
							overflow: hidden;">
  
					<div class="fancy-panel__inner-container"
						 style="width: 95%;
							height: 90%;
							background: 	lemonchiffon;
							margin: 0 auto;
							border-radius: 5px;
							z-index: 2;
							position: absolute;
							top: 50%; left: 50%;
							transform: translate(-50%, -50%);">
							<img src="images/information.png" alt="" width="8%" style="padding-top:0.9rem;">
						   <p>Some domain name are available but since we currently use a sandbox version of our domain registrar's API, which is DNSimple, 
						   our service can only support the following TLDs: .ca, .com, .io, .net, .org if you are considering subscribing.</p>
					</div>
  
  					<div class="fancy-panel__background-scroller"
						 style= "width: 620px;
						height: 200px;
						background: crimson;
						position: absolute;
						top: -400px; left: 50%;
						transform: translate(-50%, 0) rotate(-45deg);
						animation-name: slideBottomRight;
						animation-duration: 5s;
						animation-iteration-count: infinite;
						animation-timing-function: linear;">
  
  					</div>
  
				</div>				
  	
			</div>
		</div>
	</section>
	

	
	<!--====== Javascripts & Jquery ======-->
	<script src="asset/js/jquery-3.2.1.min.js"></script>
	<script src="asset/js/bootstrap.min2.js"></script>
	<script src="asset/js/owl.carousel.min.js"></script>
	<script src="asset/js/circle-progress.min.js"></script>
	<script src="asset/js/main.js"></script>

	</body>
	
</html>
