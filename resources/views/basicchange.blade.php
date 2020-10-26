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
*, *:before, *:after {
	 -webkit-box-sizing: border-box;
	 -moz-box-sizing: border-box;
	 box-sizing: border-box;
}
 html, body {
	 height: 100%;
	 min-height: 100%;
	 margin: 0;
	 padding: 0;
}
 body {
	 background-color: #fcfcfc;
	 font-family: 'Montserrat', sans-serif;
	 text-align: center;
}
 .pricing-table {
	 text-align: center;
}
/* Each pricing-item*/
 .pricing-item {
	 border-radius: 3px;
	 display: inline-block;
	 width: 260px;
	 height: auto;
	 background: #fff;
	 margin: 20px;
	 vertical-align: top;
	 position: relative;
	 overflow: hidden;
	 box-shadow: 0 1.5px 4px rgba(0, 0, 0, 0.24), 0 1.5px 6px rgba(0, 0, 0, 0.12);
	 -webkit-transition: all 0.2s cubic-bezier(0.3, 0.6, 0.2, 1.8);
	 transition: all 0.2s cubic-bezier(0.3, 0.6, 0.2, 1.8);
}
 .pricing-item:hover {
	 -webkit-transform: scale(1.04);
	 -ms-transform: scale(1.04);
	 transform: scale(1.04);
	 box-shadow: 0 3px 12px rgba(0, 0, 0, 0.23), 0 3px 12px rgba(0, 0, 0, 0.16);
}
 .pricing-item .pricing-title {
	 width: 100%;
	 color: white;
	 display: block;
	 position: relative;
	 background: #0074d9;
	 padding: 7px;
	 font-weight: bold;
	 font-size: 20px;
}
 .pricing-item.pricing-featured .pricing-title {
	 background: #ff4136;
}
/* pricing-value */
 .pricing-value {
	 width: 180px;
	 height: 180px;
	 padding-top: 46px;
	 border-radius: 50%;
	 color: #fff;
	 font-size: 46px;
	 font-weight: 300;
	 margin: 10px auto;
}
 .pricing-value .smallText {
	 font-size: 14px;
}
 .pricing-value .undertext {
	 display: block;
	 font-size: 16px;
}
 .pricing-item .pricing-value {
	 background: #0074d9;
	 border: 2px solid #0074d9;
}
 .pricing-item.pricing-featured .pricing-value {
	 background: #ff4136;
	 border: 2px solid #ff4136;
}
/* List */
 .pricing-item .pricing-features {
	 margin: 10px 0;
	 padding: 0;
	 list-style: none;
}
 .pricing-item .pricing-features li {
	 display: block;
	 width: 90%;
	 height: 40px;
	 line-height: 40px;
	 font-size: 15px;
	 font-weight: 400;
	 border-bottom: 1px solid rgba(0, 0, 0, 0.2);
	 margin: 0 auto;
}
 .pricing-item .pricing-features li .keywords {
	 font-weight: bold;
}
 .button {
	 width: 140px;
	 height: 38px;
	 font-weight: 300;
	 font-size: 16px;
	 line-height: 32px;
	 margin: 0 auto;
	 background: #fff;
	 color: #0074d9;
	 border: 2px solid #0074d9;
	 cursor: pointer;
	 margin-bottom: 10px;
	 -webkit-transition: 0.2s ease-out;
	 -moz-transition: 0.2s ease-out;
	 -o-transition: 0.2s ease-out;
	 -ms-transition: 0.2s ease-out;
	 transition: 0.2s ease-out;
	/*-webkit-box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2), 0 2px 3px rgba(0, 0, 0, 0.05);
	 box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2), 0 2px 3px rgba(0, 0, 0, 0.05);
	*/
}
 .button:hover {
	 background: #0074d9;
	 color: #fff;
	 border: none;
	 -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
	 box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
}
 .pricing-item.pricing-featured .button {
	 color: #ff4136;
	 border: 2px solid #ff4136;
}
 .pricing-item.pricing-featured .button:hover {
	 background: #ff4136;
	 color: #fff;
}
 .selected {
	 z-index: 10;
	 width: 180px;
	 height: 32px;
	 padding: 0 20px;
	 font-size: 12px;
	 line-height: 25px;
	 text-align: center;
	 color: #fff;
	 font-weight: bold;
	 box-shadow: 0px 2px 5px #888;
	 background: gold;
	 border-top: 5px solid gold;
	 border-bottom: 5px solid gold;
	 transform: rotate(35deg);
	 position: absolute;
	 right: -47px;
	 top: 17px;
}
</style>
</header>
<body  style="background-image: url('{{ asset('images/bg.jpg')}}'); background-size: cover;
                            ">

<div class="top-right links" style="padding-top:0.5rem;">
    <a href="{{ url('/home') }}">
        <img src="images/home.png" alt=" " style=" width:4%;">
    </a>       
</div>
<div class="pricing-table">

<div class="pricing-item">
<div class="pricing-title">
 SINGLE
</div>
<div class="pricing-value">$1<span class="smallText">99</span>
  <span class="undertext">/Month</span>
</div>
<ul class="pricing-features">
  <li><span class="keywords">50M</span> Storage</li>
 
  <li><span class="keywords">1</span> domain</li>
  <li><span class="keywords">1</span> user</li>
</ul>
<form action="paypalchangepayment" method="get">
<input id="single" type="hidden" name="plan" value="SINGLE"  />  
<button type="submit" class="button">Confirm</button>
</form>
</div>


<div class="pricing-item pricing-featured">
<div class='selected'>Recommended</div>
<div class="pricing-title">
  PREMIUM
</div>
<div class="pricing-value">$3<span class="smallText">99</span>
  <span class="undertext">/Month</span>
</div>
<ul class="pricing-features">
  <li><span class="keywords">150M</span> Storage</li>
  
  <li><span class="keywords">1</span> Domain</li>
  <li><span class="keywords">1</span> user</li>
</ul>
<form action="paypalchangepayment" method="get">
<input id="single" type="hidden" name="plan" value="PREMIUM"  />  
<button type="submit" class="button">Confirm</button>
</form>
</div>

</div>


</body>

</html>
 