<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Muebles Primavera</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
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
    <body style="background-image: url('../images/fondo.jpg');" >
    <img src="{{ asset('images/logo.png') }}" style="position: fixed; float: left" width="400px" >
    <div class="flex-center position-ref full-height">
            @if (Route::has('login'))

                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" style="color: #fefefe">Home</a>
                    @else

                        <a href="{{ route('login') }}"style="color: #fefefe; font-size: medium">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="color: #fefefe; font-size: medium">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md" style="color: #fefefe">
                    Muebles Primavera
                    <br>
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs" style="color: #fefefe">Documentation</a>
                    <a href="https://laracasts.com" style="color: #fefefe">Laracasts</a>
                    <a href="https://laravel-news.com" style="color: #fefefe">News</a>
                    <a href="https://nova.laravel.com" style="color: #fefefe">Nova</a>
                    <a href="https://forge.laravel.com" style="color: #fefefe">Forge</a>
                    <a href="https://github.com/laravel/laravel" style="color: #fefefe">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
