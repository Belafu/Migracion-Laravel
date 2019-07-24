<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Home')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Atomic+Age&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/headerfooter.css">
        <link rel="stylesheet" href="/css/styleHome.css">
        <link rel="stylesheet" href="/css/products.css">
        <!-- Styles -->

    </head>
    <body>
      <div class="nav-bar">
          <a class="darkcode" href="index.php">DARKCODE</a>
      </div>

      <div class="contenedorMenu">
        <div class="busqueda">
          <input class="buscador" type="text" name="" value="" placeholder="Buscar productos..."><button type="button" class="btn btn-dark boton-buscar">Buscar</button>
        </div>




          @if (Route::has('login'))
            @auth
              <div class="item-centrados">
                <ul class="items">

                <li><a class="item" href="">PRODUCTOS</a></li>

                </ul>
              </div>

  <li><a class="item" href="#"><i class="fas fa-shopping-cart"></i></a></li>
          <a href="/editarPerfil"><span class="nombre-header btn btn-color">Bienvenido {{ Auth::user()->name }}!</span></a>

          @else

            <div class="">
              <ul class="registerylogin">
                <li><a class="item" href="{{ route('login') }}">LOGIN</a></li>
                @if (Route::has('register'))
                      <li><a class="item" href="{{ route('register') }}">REGISTRO</a></li>
                @endif
              @endauth
              @endif

              </ul>
            </div>
          </div>
        </div>




      <div class="bar-mobile">
          <a class="darkcode-mobile" href="index.php">DARKCODE</a>
      </div>


        @if (Route::has('login'))
                     @auth
                       <div class="nav-mobile">
                       <li><a class="" href="#"><i class="fas fa-search item-mobile"></i></a></li>
                       <li><a class="" href="#"><i class="fas fa-box-open item-mobile" ></i></a></li>
                       <li><a class="" href="#"><i class="fas fa-shopping-cart item-mobile"></i></a></li>
                     <a href="/editarPerfil"><span class="nombre-header-mobile btn btn-color">Bienvenido {{ Auth::user()->name
                     }}!</span></a>
                 @else
                   <a href="{{ route('login') }}">Login</a>
                       @if (Route::has('register'))
                               <a href="{{ route('register') }}">Register</a>
                       @endif
                   @endauth
               @endif

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
            <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
