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
        .button {
        position: fixed;
        text-align: center;
        font-size: 42px;
        font-family: 'Raleway', sans-serif;
        color: hsl(220, 80%, 50%);
        width: 400px;
        height: 150px;
        margin-top: calc(50vh - 75px);
        margin-left: calc(50vw - 175px);

        border-radius: 30px;
        text-shadow: 
            0px 5px hsl(220, 80%, 30%), 
            0px 10px 10px #0003;
        box-shadow: 
            0px 0px 0px 15px hsl(330, 80%, 50%),
            0px 10px 0px 15px hsl(330, 80%, 40%),
            0px 20px 20px 15px #0003;
        cursor: pointer;
        border-radius: 100px 30px 100px 30px;

    }

        .button p {
            margin-top: 20px;
            transform: rotate(-3deg);
        }

        .button:hover {
            animation: .8s morph ease infinite;
        }

        .button:hover p {
            animation: .8s rot ease infinite;
        }

        @keyframes morph {
            0% {
                border-radius: 100px 30px 100px 30px;
            } 50% {
                border-radius: 30px 100px 30px 100px;
            } 100% {
                border-radius: 100px 30px 100px 30px;
            }
        }

        @keyframes rot {
            0% {
                transform: rotate(-3deg);
            } 50% {
                transform: rotate(3deg);
            } 100% {
                transform: rotate(-3deg);
            }
        }


        .bubbly-button{
  font-family: 'Helvetica', 'Arial', sans-serif;
  display: inline-block;
  font-size: 1em;
  padding: 1em 2em;
  margin-top: 75px;
  margin-bottom: 60px;
  -webkit-appearance: none;
  appearance: none;
  background-color: $button-bg;
  color: $button-text-color;
  border-radius: 4px;
  border: none;
  cursor: pointer;
  position: relative;
  transition: transform ease-in 0.1s, box-shadow ease-in 0.25s;
  box-shadow: 0 2px 25px rgba(255, 0, 130, 0.5);
  
  &:focus {
    outline: 0;
  }
  
  &:before, &:after{
    position: absolute;
    content: '';
    display: block;
    width: 140%;
    height: 100%;
    left: -20%;
    z-index: -1000;
    transition: all ease-in-out 0.5s;
    background-repeat: no-repeat;
  }
  
  &:before{
    display: none;
    top: -75%;
    background-image:  
      radial-gradient(circle, $button-bg 20%, transparent 20%),
    radial-gradient(circle,  transparent 20%, $button-bg 20%, transparent 30%),
    radial-gradient(circle, $button-bg 20%, transparent 20%), 
    radial-gradient(circle, $button-bg 20%, transparent 20%),
    radial-gradient(circle,  transparent 10%, $button-bg 15%, transparent 20%),
    radial-gradient(circle, $button-bg 20%, transparent 20%),
    radial-gradient(circle, $button-bg 20%, transparent 20%),
    radial-gradient(circle, $button-bg 20%, transparent 20%),
    radial-gradient(circle, $button-bg 20%, transparent 20%);
  background-size: 10% 10%, 20% 20%, 15% 15%, 20% 20%, 18% 18%, 10% 10%, 15% 15%, 10% 10%, 18% 18%;
  //background-position: 0% 80%, -5% 20%, 10% 40%, 20% 0%, 30% 30%, 22% 50%, 50% 50%, 65% 20%, 85% 30%;
  }
  
  &:after{
    display: none;
    bottom: -75%;
    background-image:  
    radial-gradient(circle, $button-bg 20%, transparent 20%), 
    radial-gradient(circle, $button-bg 20%, transparent 20%),
    radial-gradient(circle,  transparent 10%, $button-bg 15%, transparent 20%),
    radial-gradient(circle, $button-bg 20%, transparent 20%),
    radial-gradient(circle, $button-bg 20%, transparent 20%),
    radial-gradient(circle, $button-bg 20%, transparent 20%),
    radial-gradient(circle, $button-bg 20%, transparent 20%);
  background-size: 15% 15%, 20% 20%, 18% 18%, 20% 20%, 15% 15%, 10% 10%, 20% 20%;
  //background-position: 5% 90%, 10% 90%, 10% 90%, 15% 90%, 25% 90%, 25% 90%, 40% 90%, 55% 90%, 70% 90%;
  }
  }
}

    </style>
    </head>
    <body style="background-image: url('{{ asset('images/bg.jpg')}}'); 
                                background-size: cover;
                            height:100%;">
    
    <div type="submit" class="button" style="background-color:yellow;">
  <strong>Renewal Successful</strong>

  
 
   
   <a href="/home" class="bubbly-button"> Continue </a>
    <!-- <form action="/dns" method="post">
    @csrf
    <button class="bubbly-button">Continue</button>
    </form> -->
</div>

    <body>



</html>    
<script>


var animateButton = function(e) {

e.preventDefault;
//reset animation
e.target.classList.remove('animate');

e.target.classList.add('animate');
setTimeout(function(){
  e.target.classList.remove('animate');
},700);
};

var bubblyButtons = document.getElementsByClassName("bubbly-button");

for (var i = 0; i < bubblyButtons.length; i++) {
bubblyButtons[i].addEventListener('click', animateButton, false);
}

</script>