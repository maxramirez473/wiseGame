<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- rutas css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="shortcut icon" href="{{asset('images/wisegame.png')}}" type="image/x-icon">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

        <title>WISE GAME</title>

        <!-- Styles -->
        <style>
             body {
                width: 100%;
                height: 600px;
                background:rgb(37, 72, 142);
                /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, hsla(340, 95%, 50%, 0.459), hsla(317, 45%, 52%, 0.664)), url(../images/wisegame1.png);
                /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, hsla(220, 59%, 35%), hsla(217, 99%, 17%, 0.66)), url(../images/wisegame1.png);
                /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
               /*background-size: contain;*/
               background-repeat: repeat-x;
                background-attachment: fixed;
                position: relative;
                color: #fff;    
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
                color: #fff;
                padding: 0 10px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links pr-5">
                    @auth
                        <a href="{{ url('/home') }}">Principal</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registro</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class=" m-b-md">
                   <h3 class="title">WISE GAME</h3>
                   <p>Bienvenido a WISEGAME, un juego interactivo que pondra a prueba tus conocimientos generales,</p>
                   <p>con una gama de interesantes preguntas y asi demostrar que eres el mejor de todos!!! </p>
                </div>

            </div>
        </div>
    </body>
</html>
