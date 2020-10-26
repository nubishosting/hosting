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
body {
	padding: 0;
	margin: 0;
	display: flex;
	align-items: center;
	justify-content: center;
	min-height: 100vh;
	
	background-image: linear-gradient(135deg, #0042D9 0%, #0093FF 60%, #0078FF 100%);
}

button {
	cursor: pointer;
	position: relative;
	padding: 2.5rem 7.5rem;
	border-radius: 3.75rem;
	line-height: 2.5rem;
	font-size: 2rem;
	font-weight: 600;
	
	border: 1px solid #012880;
	background-image: linear-gradient(-180deg, #FF89D6 0%, #C01F9E 100%);
	box-shadow: 0 1rem 1.25rem 0 rgba(22,75,195,0.50),
							0 -0.25rem 1.5rem rgba(110, 15, 155, 1) inset,
							0 0.75rem 0.5rem rgba(255,255,255, 0.4) inset,
							0 0.25rem 0.5rem 0 rgba(180, 70, 207, 1) inset;
}

button span {
	color: transparent;
	background-image: linear-gradient(0deg, #EE82DA 0%, #FEFAFD 100%);
	-webkit-background-clip: text;
	background-clip: text;
	filter: drop-shadow(0 2px 2px hsla(290, 100%, 20%, 1));
}

button::before {
	content: "";
	display: block;
	height: 0.25rem;
	position: absolute;
	top: 0.5rem;
	left: 50%;
	transform: translateX(-50%);
	width: calc(100% - 7.5rem);
	background: #fff;
	border-radius: 100%;
	
	opacity: 0.7;
	background-image: linear-gradient(-270deg, rgba(255,255,255,0.00) 0%, #FFFFFF 20%, #FFFFFF 80%, rgba(255,255,255,0.00) 100%);
}

button::after {
	content: "";
	display: block;
	height: 0.25rem;
	position: absolute;
	bottom: 0.75rem;
	left: 50%;
	transform: translateX(-50%);
	width: calc(100% - 7.5rem);
	background: #fff;
	border-radius: 100%;
	
	filter: blur(1px);
	opacity: 0.05;
	background-image: linear-gradient(-270deg, rgba(255,255,255,0.00) 0%, #FFFFFF 20%, #FFFFFF 80%, rgba(255,255,255,0.00) 100%);
}
</style>
</header>
<body>
<div class="top-right links" style="padding-top:0.5rem;">
    <a href="{{ url('/home') }}">
        <img src="images/home.png" alt=" " style=" width:4%;">
    </a>       
</div>

<form action="/home" method="get">
<button type="submit" >
	<span>Keep my domain name</span>
</button>
</form>

<form action="/dnschange" method="get">
@csrf
<div style="margin-left :2rem;">
<button type="submit" > 
	<span>Change my domain name</span>
</button>
<div>
</form>

</body>
</html>

