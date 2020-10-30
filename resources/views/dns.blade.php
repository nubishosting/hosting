<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
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
            /*----*/

            .button {
	display: block;
  width: 120px;
  height: 50px;
  max-width: 100%;
  margin: 0 auto;
  margin-bottom: 0;
  margin-top:1rem;
  overflow: hidden;
  position: relative;
  transform: translatez(0);
  text-decoration: none;
  box-sizing: border-box;
  font-size: 14px;
	font-weight: normal;
	box-shadow: 0 9px 18px rgba(0,0,0,0.2);
}

.instagram {
	text-align: center;
	border-radius: 10px;
  
  color: white;
  background: #BD3381;
  transition: all 0.2s ease-out 0s;
}

.gradient {
	display: block;
  position: absolute;
  top: 0;
  right: 0;
  width: 100%;
  height: 100%;
  bottom: auto;
  margin: auto;
  z-index: -1;
  background: radial-gradient(90px circle at top center, rgba(238,88,63,.8) 30%, rgba(255,255,255,0));
  transition: all 0s ease-out 0s;
	transform: translatex(-140px);
	animation: 18s linear 0s infinite move;
}

#reg {
    display: none;
}

#redi {
    display: none;
}

@keyframes move {
	0% {
		transform: translatex(-140px);
	}
	25% {
		transform: translatex(140px);
		opacity: 0.3;
	}
	50% {
		transform: translatex(140px);
		opacity: 1;
		background: radial-gradient(90px circle at bottom center, rgba(238,88,63,.5) 30%, rgba(255,255,255,0));
	}
	75% {
		transform: translatex(-140px);
		opacity: 0.3;
	}
	100% {
		opacity: 1;
		transform: translatex(-140px);
		background: radial-gradient(90px circle at top center, rgba(238,88,63,.5) 30%, rgba(255,255,255,0));
	}
}
            
/*--*/
h1 {
  width: 100%;
  margin: 0 auto 0 auto;
  font-family: 'Lato', sans-serif;
  line-height: 28px;
  font-size: 3rem;
  padding: 30px 10px;
  text-align: center;
  text-transform: uppercase;
  text-rendering: optimizeLegibility;
}

/*	
============
	Light
============
*/
h1::before {
  content:"";
  width: 100%;
  height: 25px;
  position: absolute;
  top: -20px;
  left: 10px;
  transform: rotate(55deg);
  background: rgba(206,188,155,.7);
  background: -moz-linear-gradient(left, rgba(206,188,155,.7) 0%, rgba(42,31,25,0) 65%);
  background: -webkit-gradient(left top, right top, color-stop(0%, rgba(206,188,155,.7)), color-stop(65%, rgba(42,31,25,0)));
  background: -webkit-linear-gradient(left, rgba(206,188,155,.7) 0%, rgba(42,31,25,0) 65%);
  background: -o-linear-gradient(left, rgba(206,188,155,.7) 0%, rgba(42,31,25,0) 65%);
  background: -ms-linear-gradient(left, rgba(206,188,155,.7) 0%, rgba(42,31,25,0) 65%);
  background: linear-gradient(to right, rgba(206,188,155,.7) 0%, rgba(42,31,25,0) 65%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cebc9b', endColorstr='#2a1f19', GradientType=0.7 ); );
}



/*	
========================
			3D Effect
========================
*/
#text3d {
    color: #87CEFA;
    letter-spacing: .10em;
    text-shadow: 
      -1px -1px 1px #efede3, 
      0px 1px 0 #2e2e2e, 
      0px 2px 0 #2c2c2c, 
      0px 3px 0 #2a2a2a, 
      0px 4px 0 #282828, 
      0px 5px 0 #262626, 
      0px 6px 0 #242424, 
      0px 7px 0 #222, 
      0px 8px 0 #202020, 
      0px 9px 0 #1e1e1e, 
      0px 10px 0 #1c1c1c, 
      0px 11px 0 #1a1a1a, 
      0px 12px 0 #181818, 
      0px 13px 0 #161616, 
      0px 14px 0 #141414, 
      0px 15px 0 #121212,
      2px 20px 5px rgba(0, 0, 0, 0.9),
      5px 23px 5px rgba(0, 0, 0, 0.3),
      8px 27px 8px rgba(0, 0, 0, 0.5),
      8px 28px 35px rgba(0, 0, 0, 0.9);
 }
        </style>
    </head>

    <main class="py-4">
    <body id="loading"  style="background-image: url('{{ asset('images/prereg.png')}}'); 
                                background-size: cover;
                            height:100%;">
        
        <div class="content">
        <div style="margin-right: 1rem;
                    margin-top:2rem;
                   ">
           <h1 id="text3D">REGISTER YOUR DOMAIN</h1>
        
        </div>
            <form style="" >
                <div class="instagram"style=" width:400px;margin-left:475px;
                            margin-top:2rem;
                            opacity:0.9;
                            border: 2px solid rgb(139,0,139);
	                        background-image: linear-gradient(-180deg, #FF89D6 0%, #C01F9E 100%);
	                        box-shadow: 0 1rem 1.25rem 0 rgba(22,75,195,0.50),
							0 -0.25rem 1.5rem rgba(110, 15, 155, 1) inset,
							0 0.75rem 0.5rem rgba(255,255,255, 0.4) inset,
							0 0.25rem 0.5rem 0 rgba(180, 70, 207, 1) inset;
                            ">     
                    <input type="text" class="input-field " id="dmn"
                        placeholder="Search for your domain" onfocus="this.select()"
                        style="border:1px solid #556; width:250px;height:50px; border-radius: 10px; 
                        padding-left:7px;
                        margin-top:0.5rem;
                        margin-bottom:0.5rem;
                        background-color:white;
                        ">
                    <select style=" " id="tld">
                        <option value=".ca" >.ca</option>
                        <option value=".com">.com</option>
                        <option value=".io">.io</option>
                        <option value=".net">.net</option>
                        <option value=".org">.org</option>
                    </select>    
                        
                       
        
                    </div>
                    <button class="button instagram" id="sbtn" type="submit" style="">
                            <span class="gradient"></span><strong>Search</strong>
					</button>

        </form>
        </div>
        
        <div class="content" style="margin-top:8rem;">
        <div class="fancy-panel"
					 style="width: 400px;
							height: 150px;
							background: pink;
							border-radius: 5px;
							margin: 0 auto;
							opacity: 0.8;
							text-align: center;
							position: relative;
							overflow: hidden;">
  
					<div  class="fancy-panel__inner-container"
						 style="width: 95%;
							height: 90%;
							background: 	lemonchiffon;
							margin: 0 auto;
							border-radius: 5px;
							z-index: 2;
							position: absolute;
							top: 50%; left: 50%;
                            transform: translate(-50%, -50%);">
                            
						<p id="result">
                       
                            
                        </p>
                        
                        <button class="button instagram" id="reg" type="submit" style="margin-top:0.5rem;">
                         <span class="gradient"></span><strong>Register it</strong>
                         </button>	
                        
                        <form action="/redirfromdnstocodt" method="post">
                        @csrf
                         <button class="button instagram" id="redi" type="submit" style="margin-top:0.5rem;">
                         <span class="gradient"></span><strong>Continue</strong>
                         </button>	
                         </form>


                         

                         	

                        
					</div>  	
  
				</div>				
  	
        </div>
    </body>
    </main>


</html>  
<script src="{{asset('js/jquery-3.4.1.js')}}"></script>
<script>
$(document).ready(function(){
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
   
   
   var $result = $('#result');
    
    window['domainStatus'] = function( myStatus )
					{
						console.log(myStatus);
						
						if (myStatus.data.available === true)
                        
						{
                            $("#result").html("<p>You can register your domain now</p>");
                            $('#reg').show(500);  
                           
						}
						else{
							 $("#result").html("<p>Please check for another</p>");
                             $('#reg').hide(500);
 
                            	
                            
						}
					}



    $("#sbtn").click(function(e){

        e.preventDefault();

        $.post(
            '{{ route('ajaxget') }}',

            {
                drpinp : $("#dmn").val() + $("#tld").val()  // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php
            },
 
            function(result){               
                window.domainStatus(result);	
            },
            'json'
        );
    });


    $("#reg").click(function(e){

e.preventDefault();

$.post(
    '{{ route('ajaxpost') }}',

    {
        drpinp : $("#dmn").val() + $("#tld").val()  // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php
    },

    function(result){               
        $("#result").html("<p>Your domain has been registered.</p>");
        
        $('#reg').hide(500);
        $('#redi').show(500);	
    },
    'json'
);
});


   


});  
</script>