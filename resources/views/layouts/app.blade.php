<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        TYKETD -   @yield('title')
    </title>

    <!-- Fonts -->
    <!--
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

     -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link rel='shortcut icon' type='image/png' href='{{asset("img/logoT.png")}}' />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('stylesheet')
</head>
<body>

<div id="app">
    <!-- Include header -->
    @include('Inc.header')
    <!-- another page must use this -->
    <div id="app">
        @yield('content')
    </div>
<!-- Include footer -->
    @include('Inc.footer')
    @include('Inc.help')
</div>


<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<!-- <script src="{.{asset('js/popper.min.js')}}"></script> -->
<script src="{{asset('js/bootbox.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

@yield('javascript')
</body>
</html>
