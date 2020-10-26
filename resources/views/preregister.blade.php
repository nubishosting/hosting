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

                <!-- Styles -->
                <link href="{{ asset('css/app.css') }}" rel="stylesheet">


                <style>
            html, body {
        
    		
            /*color: #636b6f;*/
            color: white;
            font-family: 'Montserrat';
            font-weight: 200;
            height: 100vh;
            margin: 0;
            }

            ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            border-radius: 10px;
            background-color:  	blue;
            
        }

        li {
            float: left;
            
            }

        li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }

        li a:hover {
        background-color: #FFF0F5;
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
   
        </style>
    </head>

    <main class="py-4">
    <body id="loading"  style="background-image: url('{{ asset('images/apropos.png')}}'); background-size: cover;
                            height:100%;">
                <div class="top-right links" style="">
                <ul>                  
                <li><a href="{{ url('/') }}"> | Homepage </a></li>
                <li><a href="{{ url('/apropos') }}" style="background-color: deepskyblue;"> | About us </a></li>
                <li><a href="{{ url('/domaine') }}"> | Domain</a></li>
                <li><a href="{{ url('/tarif') }}" style="background-color: deepskyblue;"> | Pricing</a></li>
                </ul>
            </div>
            <div class="content">



            <!--                   -->
<div class="container" style="margin-top:4rem; opacity: 0.9; ">

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card" style="margin-bottom:1rem; margin-bottom:1rem;box-shadow: 5px 10px blue;">
            <div class="card-header" style="background-image: url('{{ asset('images/prereg.png')}}'); background-size:cover;">
                <center>
                    <img src="images/create.png" alt="" style="width:10%;"> 
                </center>
            </div>

            <div class="card-body">
                <div class="form-group row">
                    <div class="col-md-4 col-form-label text-md-right">
                        <img src="images/dmn.png" alt="" style="width:35%;">   
                    </div>
                    <div class="col-md-6">
                        <p>1. Choose a domain name then check its availability <a href="domaine"> here </a></p>.
                    </div>
                <div>
                <div class="form-group row">
                    <div class="col-md-4 col-form-label text-md-right">
                        <img src="images/offers.png" alt="" style="width:35%;">
                    </div>   
                    <div class="col-md-6">
                        <p>2. Choose a plan that matches your need<a href="tarif"> here </a></p>.
                    </div> 
                </div>
                <div class="form-group row">
                    <div class="col-md-4 col-form-label text-md-right">
                        <img src="images/signupnow.png" alt="" style="width:35%;">
                    </div>
                    <div class="col-md-6">
                        <p>3. Then start the subscription process <a href="{{ url('/register') }}"  >here </a>.</p>.
                    </div> 
                </div>
               
               <center>
               <p> You can find more information about this subscription process <a href="preregistertwo">here</a></p>
               <p> Have a look at the <a href="{{ asset('/terms.pdf') }}"> terms and conditions of use </a> and
               the  <a href="{{ asset('/policies.pdf') }}"> confidentiality policies </a> of Nubis-Hosting.
               <center>    
                   
                    
                    
            
            </div>
                    
               
           
        </div>
    </div>
</div>
</div>
    
    </body>
    </main>


</html>    