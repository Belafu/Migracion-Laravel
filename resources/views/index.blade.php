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
    <img class="d-block w-100 " src="images/tecladoo.jpg" alt="First slide">
  </div>
  <div class="carousel-item">
    <img class="d-block w-100" src="images/auricularr.jpg" alt="Second slide">
  </div>
  <div class="carousel-item">
    <img class="d-block w-100" src="images/mouse.jpg" alt="Third slide">
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
<h2 class="texto-novedades">NOVEDADES</h2>
<div class="novedades">
<div class="novedad-uno">
  <div class="contenedor-producto">
    <img src="images/auriculargamer.jpeg" class="img-fluid" alt="Responsive image">
    <h2 class="novedad">Auricular Gamer Razer </h2>
    <div class="botones">
      <button id="info" class="btn btn-dark btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" type="button" name="button">+Informacion</button>
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
        Lorem ipsum doerunt mollit anim id est laborum.
        Lorem ipsum doerunt mollit anim id est laborum.
        Lorem ipsum doerunt mollit anim id est laborum.
        Lorem ipsum doerunt mollit anim id est laborum.
        Lorem ipsum doerunt mollit anim id est laborum.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn btn-dark" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
      <button class="btn btn-dark" type="button" name="button">Productos</button>
    </div>

  </div>

</div>
<div class="novedad-uno">
    <img src="images/mousegamer.jpeg" class="img-fluid" alt="Responsive image">
  <h2 class="novedad">Mouse Gamer Razer </h2>
  <div class="botones">
    <button id="info" class="btn btn-dark btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" type="button" name="button">+Informacion</button>
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
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary btn btn-dark" data-dismiss="modal">Cerrar</button>
    </div>
  </div>
</div>
</div>
      <button class="btn btn-dark" type="button" name="button">Productos</button>
  </div>
</div>
<div class="novedad-uno">
  <img src="images/mousegamer.jpeg" class="img-fluid" alt="Responsive image">
  <h2 class="novedad">Teclado Gamer Razer </h2>
  <div class="botones">
    <button id="info" class="btn btn-dark btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" type="button" name="button">+Informacion</button>
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
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary btn btn-dark" data-dismiss="modal">Cerrar</button>
    </div>
  </div>
</div>
</div>
    <button class="btn btn-dark" type="button" name="button">Productos</button>
  </div>
</div>
</div>

<h2 class="texto-novedades">LO MAS VENDIDO</h2>
<div class="novedades">
<div class="novedad-uno">
  <div class="contenedor-producto">
    <img src="images/auriculargamer.jpeg" class="img-fluid imagen" alt="Responsive image">
    <h2 class="novedad">Auricular Gamer Razer </h2>
    <div class="botones">
      <button id="info" class="btn btn-dark btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" type="button" name="button">+Informacion</button>
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
        Lorem ipsum doerunt mollit anim id est laborum.
        Lorem ipsum doerunt mollit anim id est laborum.
        Lorem ipsum doerunt mollit anim id est laborum.
        Lorem ipsum doerunt mollit anim id est laborum.
        Lorem ipsum doerunt mollit anim id est laborum.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn btn-dark" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
      <button class="btn btn-dark" type="button" name="button">Productos</button>
    </div>
  </div>

</div>
<div class="novedad-uno">
  <img class="imagen-x"src="images/mousegamer.jpeg" alt="Responsive image">
  <h2 class="novedad">Mouse Gamer Razer </h2>
  <div class="botones">
    <button id="info" class="btn btn-dark btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" type="button" name="button">+Informacion</button>
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
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary btn btn-dark" data-dismiss="modal">Cerrar</button>
    </div>
  </div>
</div>
</div>
    <button class="btn btn-dark" type="button" name="button">Productos</button>
  </div>
</div>
<div class="novedad-uno">
  <img src="images/mousegamer.jpeg" class="img-fluid imagen" alt="Responsive image">
  <h2 class="novedad">Teclado Gamer Razer </h2>
  <div class="botones">
    <button id="info" class="btn btn-dark btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" type="button" name="button">+Informacion</button>
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
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
      Lorem ipsum doerunt mollit anim id est laborum.
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary btn btn-dark" data-dismiss="modal">Cerrar</button>
    </div>
  </div>
</div>
</div>
    <button class="btn btn-dark" type="button" name="button">Productos</button>
  </div>
</div>
</div>


    <marquee class="marque"><img class="fotos-marque" src="images/slideuno.jpeg"><img class="fotos-marque" src="images/slide2.jpg"><img class="fotos-marque" src="images/slide3.jpg"><img class="fotos-marque" src="images/slideuno.jpeg"><img class="fotos-marque" src="images/slide2.jpg"><img class="fotos-marque" src="images/slide3.jpg"> </marquee>
    <script type="text/javascript" src="js/home.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection
