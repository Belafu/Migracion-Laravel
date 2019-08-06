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
  <link rel="stylesheet" href="/css/product.css">
  <link rel="stylesheet" href="/css/register.css">
  <link rel="stylesheet" href="/css/carrito.css">
  <link rel="stylesheet" href="/css/editarPerfil.css">
  <!-- Styles -->

</head>
<body>

  {{-- <div class="dropdown show">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="/editarPerfil"><span class="nombre-header">Bienvenido {{ Auth::user()->name }}!</span>
    </a>

    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <a class="dropdown-item" href="#">Mi cuenta</a>
      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
  </div> --}}

  <div class="nav-bar">
    <a id="section2" class="darkcode" href="/">DARKCODE</a>
  </div>

  <div class="contenedorMenu">
    <form class="busqueda" action="/products/search" method="get">
      <input class="buscador" type="text" name="search" value="" placeholder="Buscar productos..."><button type="submit" class="btn btn-dark boton-buscar">Buscar</button>
    </form>

    @if (Route::has('login'))
      @auth
        <div class="item-centrados">
          <ul class="items">
            <li><a class="item" href="/products">PRODUCTOS</a></li>

          </ul>
        </div>

        <div class="dropdown show">
          <a class="btn btn-secondary dropdown-toggle" style="background-color: black" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="/editarPerfil"><span class="nombre-header">Bienvenido {{ Auth::user()->name }}!</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="/editarPerfil/{{ Auth::user()->id}}">Mi cuenta</a>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
          </div>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
        <li><a class="item" href="/cart"><i class="fas fa-shopping-cart"></i></a>
          @if (isset($cantidad))
            <p class="contador-carrito">{{$cantidad}}</p><!--Cuando estoy logueado-->
          @else
          @endif
        </li>
      @else
        <li><a class="item" href="/products" style="margin-left:20px;">PRODUCTOS</a></li>

        <div class="">
          <ul class="registerylogin">
            <li><a class="item" href="{{ route('login') }}">LOGIN</a></li>
            @if (Route::has('register'))
              <li><a class="item" href="{{ route('register') }}">REGISTRO</a></li>
              <li><a class="item" href="/cart"><i class="fas fa-shopping-cart"></i></a>
              {{-- <p class="contador-carrito">7</p><!--Cuando estoy deslogueado--> --}}
              </li>

            @endif
          @endauth
        @endif

      </ul>
    </div>
  </div>

  <div class="bar-mobile">
    <a class="darkcode-mobile" href="/">DARKCODE</a>
  </div>

  @if (Route::has('login'))
    @auth
      <div class="nav-mobile">
        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" style="background-color:black" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-search item-mobile"></i>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <form class="" action="/products/search" method="get">
    <i type="submit" class="fas fa-search item-mobile" ><input type="text" name="search" value="" placeholder="  Buscar Productos..."></i>
    </form>
  </div>
</div>
        <li><a class="" href="/products" style="font-size:30px"><i class="fas fa-box-open item-mobile"></i></a></li>
        <li><a class="" href="/cart" style="font-size:30px"><i class="fas fa-shopping-cart item-mobile"></i></a></li>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" style="background-color: black; font-weight: bold; font-size:20px" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Bienvenido {{ Auth::user()->name }}!
          </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="/editarPerfil/{{ Auth::user()->id}}" >Mi cuenta</a>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            </div>
        </div>

      @else
        <div class="nav-mobile">

    <button class=" dropdown-toggle" style="background-color: white; border:none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i style="color:black; "class="fas fa-search item-mobile"></i>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <form class="" action="/products/search" method="get">
      <i type="submit" class="fas fa-search item-mobile" ><input type="text" name="search" value="" placeholder="  Buscar Productos..."></i>
      </form>
    </div>

          <li><a class="" href="/products"><i class="fas fa-box-open item-mobile" ></i></a></li>
          <li><a class="" href="/cart"><i class="fas fa-shopping-cart item-mobile"></i></a></li>
          <li><a class="logyreg-mobile"href="{{ route('login')}}">Login</a></li>
          @if (Route::has('register'))
            <li><a class="logyreg-mobile"href="{{ route('register')}}">Registro</a></li>
          @endif
        @endauth
      @endif
    </div>

  </div>

  @yield('content')
  <div class="main arriba" id="section1">
    <a class="texto-arriba"href="#section2">GO ARRIBA!</a>
  </div>
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
              <span class="fab fa-instagram"></span>
            </a>
          </li>
        </ul>

      </div>

      <p class="copyright">  Copyright  &copy; Todos los Derechos Reservados <p>
      </div>

    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
{{-- 
    <script type="text/javascript" src="js/productos.js"></script> --}}
    <script>
    $(document).ready(function(){
       // Add smooth scrolling to all links
      $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });
    </script>
  </body>
  </html>
