@extends('welcome')

@section('content')

  <div id="carouselExampleIndicators" class="carousel slide carros" data-ride="carousel">
<ol class="carousel-indicators">
  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner carros">
  <div class="carousel-item active">
    <img class="d-block w-100 " src="images/auricularr.jpg" alt="First slide">
  </div>
  <div class="carousel-item">
    <img class="d-block w-100" src="images/mouse.jpg" alt="Second slide">
  </div>
  <div class="carousel-item">
    <img class="d-block w-100" src="images/tecladoo.jpg" alt="Third slide">
  </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
<div class="" style="background-color: black">
<h2 class="texto-novedades" style="color: white;">NOVEDADES</h2>
<div class="novedades">
<div class="novedad-uno">
  <div class="contenedor-producto">
    <img src="images/auriculargamer.jpeg" class="img-fluid ipad" alt="Responsive image">
    <h2 class="novedad" style="color: white">Auricular Gamer Razer </h2>
    <div class="botones">
      <button id="info" class="btn btn-dark btn btn-primary"data-toggle="modal" data-target="#exampleModalCenter" type="button" name="button">Informacion</button>
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Auricular Gamer Razer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="display:flex; flex-direction: column">
        <p>Lorem ipsum doerunt mollit anim id est laborum.
        Lorem ipsum doerunt mollit anim id est laborum.
        Lorem ipsum doerunt mollit anim id est laborum.
        Lorem ipsum doerunt mollit anim id est laborum.
        Lorem ipsum doerunt mollit anim id est laborum.</p>
        <p>$1500</p>
        <a href="/products">Ver mas productos</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn btn-dark" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>

</div>
<div class="novedad-uno">
  <div class="contenedor-producto">
    <img src="images/mousegamer.jpeg" class="img-fluid ipad" alt="Responsive image">
  <h2 class="novedad" style="color: white">Mouse Gamer Razer</h2>
  <div class="botones">
    <button id="info" class="btn btn-dark btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" type="button" name="button">Informacion</button>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Mouse Gamer Razer</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <p>Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.</p>
      <p>$1500</p>
      <a href="/products">Ver mas productos</a>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary btn btn-dark" data-dismiss="modal">Cerrar</button>
    </div>
  </div>
</div>
</div>
</div>
  </div>
</div>

<div class="novedad-uno">
  <div class="contenedor-producto">
  <img src="images/tecladogamer.jpg" class="img-fluid ipad" alt="Responsive image">
  <h2 class="novedad" style="color: white">Teclado Gamer Razer </h2>
  <div class="botones">
    <button id="info" class="btn btn-dark btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" type="button" name="button">Informacion</button>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Teclado Gamer Razer</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <p>Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.</p>
      <p>$1500</p>
      <a href="/products">Ver mas productos</a>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary btn btn-dark" data-dismiss="modal">Cerrar</button>
    </div>
  </div>
</div>
</div>

  </div>
</div>
</div>
</div>

<h2 class="texto-novedades" style="color: white;">LO MAS VENDIDO</h2>
<div class="novedades">
<div class="novedad-uno">
  <div class="contenedor-producto">
    <img src="images/auriculargamer.jpeg" class="img-fluid ipad" alt="Responsive image">
    <h2 class="novedad" style="color: white">Auricular Gamer Razer </h2>
    <div class="botones">
      <button id="info" class="btn btn-dark btn btn-primary"data-toggle="modal" data-target="#exampleModalCenter" type="button" name="button">Informacion</button>
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Auricular Gamer Razer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum doerunt mollit anim id est laborum.
        Lorem ipsum doerunt mollit anim id est laborum.
        Lorem ipsum doerunt mollit anim id est laborum.
        Lorem ipsum doerunt mollit anim id est laborum.
        Lorem ipsum doerunt mollit anim id est laborum.</p>
        <p>$1500</p>
        <a href="/products">Ver mas productos</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn btn-dark" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>

</div>
<div class="novedad-uno">
  <div class="contenedor-producto">
    <img src="images/mousegamer.jpeg" class="img-fluid ipad" alt="Responsive image">
  <h2 class="novedad" style="color: white">Mouse Gamer Razer </h2>
  <div class="botones">
    <button id="info" class="btn btn-dark btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" type="button" name="button">Informacion</button>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Mouse Gamer Razer</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <p>Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.</p>
      <p>$1500</p>
      <a href="/products">Ver mas productos</a>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary btn btn-dark" data-dismiss="modal">Cerrar</button>
    </div>
  </div>
</div>
</div>
</div>
  </div>
</div>

<div class="novedad-uno">
  <div class="contenedor-producto">
  <img src="images/tecladogamer.jpg" class="img-fluid ipad" alt="Responsive image">
  <h2 class="novedad" style="color: white">Teclado Gamer Razer </h2>
  <div class="botones">
    <button id="info" class="btn btn-dark btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" type="button" name="button">Informacion</button>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Teclado Gamer Razer</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <p>Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.</p>
      <p>$1500</p>
      <a href="/products">Ver mas productos</a>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary btn btn-dark" data-dismiss="modal">Cerrar</button>
    </div>
  </div>
</div>
</div>

  </div>
</div>
</div>
</div>
</div>
    <marquee class="marque" style="margin-top:20px"><img class="fotos-marque" src="images/slideuno.jpeg"><img class="fotos-marque" src="images/slide2.jpg"><img class="fotos-marque" src="images/slide3.jpg"><img class="fotos-marque" src="images/slideuno.jpeg"><img class="fotos-marque" src="images/slide2.jpg"><img class="fotos-marque" src="images/slide3.jpg"> </marquee>
    <script type="text/javascript" src="js/home.js"></script>
@endsection
