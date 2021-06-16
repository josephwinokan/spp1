<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                width: 0px;
                height: 100vh;
                background: url(css/hail.jpg);
                background-position: center;
                background-size: cover;
                background-attachment: fixed;
                position: absolute;
                margin-bottom: 0px;
                padding: 0px;
                font-family:sans-serif;
                
            }

            /* .full-height {
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

            /* .title {
                font-size: 84px;
            } */

            .links > a {
                color: black;
                padding: 0 15px;
                font-size: 33px;
                font-weight: 400;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                width: 420px;
                
            }

            .login-box{
                width: 456px;
                height: 80px;
                background: rgba(0,0,0,0.5);
                color: #fff;
                top: 50%;
                left: 50%;
                position: absolute;
                box-sizing: border-box;
                padding: 25px;
                transform: translate(50%,-50%);
                }

            /* .m-b-md {
                margin-bottom: 30px;
            } */

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">.</a>
                @else
                <a href="{{ route('login') }}">.</a>
                
                @if (Route::has('register'))
                <a href="{{ route('register') }}">.</a>
                @endif
                @endauth
            </div>
            @endif
            
            <div class="login-box" id="login-box">
            <div class="content">
                <div class="title m-b-md">
                  
                </div>
                
                <div class="links">
                    <a href="{{ route('login') }}">Login</a>
                    <a href="#">|</a>
                    <a href="{{ route('register') }}">Register</a>
                </div>
            </div></div>
        </div>
    </body>
</html>
