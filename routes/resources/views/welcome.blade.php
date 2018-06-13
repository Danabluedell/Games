<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dreamer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="{!! asset('js/script2.js') !!}"></script>
        <!-- Styles -->
        <style>
            html, body {
                background: url("http://cg-evolution.ru/wp-content/uploads/2014/09/Batman-Arkham_City_Batman-Harley.jpg") no-repeat;
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



    {{--<div class="slider">--}}
    {{--<ul>--}}
        {{--<li><img url="http://saint-epondyle.net/blog/wp-content/uploads/2012/12/Batman-Arkham_City_Batman-Harley.jpg" alt="">--}}
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
                    <h1>Dreamer</h1>
                </div>

                <div class="links">
                    <a href="">Games</a>                   <a href="">News</a>
                    <a href="">Telegram</a>
                </div>
            </div>
        </div>
        {{--</li>--}}
                {{--<li><img url="https://i.pinimg.com/originals/3a/d0/b9/3ad0b9bf0bf3b6186f22564840576b7b.jpg" alt=""></li>--}}
                {{--<li><img url="" alt=""></li>--}}
                {{--<li><img url="" alt=""></li>--}}
                {{--<li><img url="" alt=""></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    </body>

</html>
