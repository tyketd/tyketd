<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TYKETD</title>
    <link rel='shortcut icon' type='image/png' href='{{asset("img/logo.png")}}' />
    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Styles -->


</head>
<body>

@yield('content')

<div class="help hide-mobile" id="help">
    <div class="d-flex flex-column">
        <div class="d-flex flex-row justify-content-end groupfoto">
            <img src="{{asset('img/tof.jpg')}}" alt="" class="d-flex img1">
            <img src="{{asset('img/tof.jpg')}}" alt="" class="d-flex img2">
            <img src="{{asset('img/tof.jpg')}}" alt="" class="d-flex img3">
        </div>
        <div class="blockenligne d-flex flex-row">
            <span class="d-flex circlegreen"></span>
            <span class="d-flex">
                En ligne
            </span>
        </div>
        <div id="btnhidehelp">
            <i class="fa fa-arrow-down" aria-hidden="true"></i>
        </div>
        <div class="flex-row d-flex">
            <div class="flex-column d-flex part1">
                <span class="title d-flex">BESOIN D'AIDE ?</span>
                <span class="desc d-flex">Echangez ave les convoitureurs de la communauté TYKETD</span>
            </div>
            <div class="flex-column d-flex justify-content-center">

                <a href="#" class="d-flex linkhelp">Cest par ici</a>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>