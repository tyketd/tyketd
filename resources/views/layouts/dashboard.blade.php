<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TYKETD</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <style>
        body{
            padding-top: 20px;
        }
        .nav-link a{
            text-decoration: none;
        }
        .card.leftmenu{
            margin-left: 0px;
            margin-bottom: 10px;
            padding: 0px;
        }
        .card.leftmenu .card-header{
            margin: 0px;
            width: 100%;
        }
        .card.leftmenu .card-body{
            padding: 0px;
            width: 100%;
        }
        .card.leftmenu .card-body .list-group{
            padding: 0px;
            width: 100%;
        }
        .card.leftmenu .card-body .list-group-item{
            padding-left: 5px;
            text-align: left;
        }
        .card.leftmenu .card-body .list-group-item:hover{
            background-color: red;
        }
        .card.leftmenu .card-body .list-group-item.active:hover{
            background-color: blue;
        }
        .nav-tabs .nav-link.active{
            padding-top: 10px;
        }
        li a:hover{
            text-decoration: none;
        }
        .nav.nav-tabs{
            margin-bottom: 30px;
        }
        .col-md-2 .leftmenu{
            margin-right: -20px;
        }

    </style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Styles -->


</head>
<body>

@yield('content')


<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>