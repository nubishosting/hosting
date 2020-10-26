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
        width: 350px;
        height: 100px;
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
    </style>
    </head>
    <body>
    <div type="submit" class="button" style="background-color:yellow;">
  <strong> PROCESS </strong>
 
    </div>
    
    <body>



</html>    