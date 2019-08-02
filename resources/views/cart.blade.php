@extends('welcome')

@section('title', 'Detalle del carrito ')

@section('content')

<h2 class="cart-text">Cart</h2>

<div class="supercontenedor">
@forelse ($cart as $item)
  <div class="contenedor-total">
      <div class="foto-carro">
          <img src="/storage/products/{{$item->featured_img}}" alt="">
      </div>

      <div class="info-carro">
          <h1>{{$item->name}}</h1>
          <form class="" action="/cart/{{$item->id}}" method="post">
          @csrf
          <p>Seleccione cuantos productos quiere</p>
          <input type="number" id="cant-product" name="cant" value="{{$item->cant}}"  min="1" max="10">
          <p>Una vez seleccionada la cantidad de productos, apretar "Asegurar"</p>
          <input type="submit" name="" value="Asegurar">
          </form>
          <p>¿Quieres eliminar producto del carrito?</p>
          <form class="butom-elminar" action="/cart/{{$item->id}}" method="post">
              @csrf <!--Capa de seguridad Obligatoria para Laravel-->
              {{ method_field('DELETE') }}
              <!-- lo de arriba equivale a <input type="hidden" name="_method" value= "delete" > -->
              <input type="submit" name="" value="Eliminar">
          </form>

      </div>
  </div>
@empty
    <p>No ha seleccionado nada para comprar</p>
@endforelse
</div>
<div class="b-carrito">
  <a href="/resumen" class="btn btn-primary ">comprar</a>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection
