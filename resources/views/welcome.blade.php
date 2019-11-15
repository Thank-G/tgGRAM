<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>tgGRAM</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">

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
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        <div class="container">

            <div class="content">
                    <div class="title m-b-md">
                        <h4>Welcome to <span class="typed-words"></span></h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3 pt-5">
                    <img src="../images/logo2.png"><br>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>

        <script>
            var typed = new Typed('.typed-words', {
            strings: [" tgGRAM "],
            typeSpeed: 100,
            backSpeed: 100,
            backDelay: 5000,
            startDelay: 200,
            loop: true,
            showCursor: false
            });
        </script>

    </body>
</html>
