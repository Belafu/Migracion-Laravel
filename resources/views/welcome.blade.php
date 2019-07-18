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
        <link rel="stylesheet" href="/css/headerfooter.css">
        <link rel="stylesheet" href="/css/styleHome.css">
        <!-- Styles -->

    </head>
    <body>
      <header>
        <a href="/"><h2 class="logo">DarkCode</h2></a>
        <input type="checkbox" id="chk">
        <label for="chk" class="show-menu-btn">
          <i class="fas fa-ellipsis-h"></i>
        </label>
        <ul class="menu-header">
          <label for="chk" class="hide-menu-btn">
            <i class="fas fa-times"></i>
          </label>
          @if (Route::has('login'))
              @auth
              <a href="{{ url('/home') }}">Home</a>
              <a href="/editarPerfil"><span class="nombre-header btn btn-color">{{ Auth::user()->name }}</span></a>
          @else
              <a href="{{ route('login') }}">Login</a>
                  @if (Route::has('register'))
                          <a href="{{ route('register') }}">Register</a>
                  @endif
              @endauth
          @endif
          <a href="/products">Productos</a><!--estaba productos.php-->
          <a href="/cart"><i class="fas fa-shopping-cart"></i></a>
        </ul>
      </header>

      @if (Route::has('login'))
          @auth
      <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
      </li>
      </ul>
    @endauth
@endif
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
