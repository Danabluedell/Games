<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Dreamer</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{!! asset('js/script2.js') !!}"></script>
    <!-- Styles -->
    <style>
        html, body {
            background: black;
            background-size: cover;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
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
            font-size: 150px;
            color: red;
        }

        .links > a {
            color: red;
            padding: 0 25px;
            font-size: 25px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="#"><b>Dreawer</b></a>
    {{--<button class="narbar-toggler" type="button" data-toggle="collapse"--}}
    {{--data-target="#navbarSupport">--}}
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapce navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a href="#" class="nav-link">Hello</a>
            </li>
            <li class="nav-item active">
                <a href="#" class="nav-link">Good afternoon</a>
            </li>
            <li class="nav-item active">
                <a href="#" class="nav-link">Bye</a>
            </li>
            <li class="nav-item active">
                <a href="{{ route('login') }}" class="nav-link">Login</a>
            </li>
            <li class="nav-item active">
                <a href="#" class="nav-link">Register</a>
            </li>
        </ul>
        </div>
</nav>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            <h1>Dreawer</h1>
        </div>

        <div class="links">
            <a href="">Games</a>
            <a href="">News</a>
            <a href="">Telegram</a>
        </div>
    </div>
</div>

</body>

</html>
