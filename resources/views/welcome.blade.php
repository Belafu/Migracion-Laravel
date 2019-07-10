<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Home')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/footer.css">
        <!-- Styles -->
         <style>
            html, body {
                background-color: #fff;

                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

            </div>
        </div>

        @yield('content')

        <footer>
          <div class="social">
            <div class="text-social">
                <p>Siguenos en</p>
            </div>
            <div class="iconosSociales">
              <ul>
                <li>
                  <a href="#">
                    <span class="fab fa-facebook-f"></span>
                  </a>
                </li>

                <li>
                  <a href="#">
                    <span class="fab fa-twitter"></span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="fab fa-google-plus-g"></span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="fab fa-linkedin-in"></span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="fab fa-instagram"></span>
                  </a>
                </li>
              </ul>
            </div>
            <p class="copyright">  Copyright  &copy; Todos los Derechos Reservados <p>
          </div>
        </footer>
    </body>
</html>
