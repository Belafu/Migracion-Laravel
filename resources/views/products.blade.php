@extends('welcome')

@section('title', 'Vista de productos')

@section('content')

<h2 class="h2-products">Lista de productos</h2>
<div class="caja-filtro">
  <div class="botom-filtro">
    <a  href="#"> <i class="fas fa-filter">Filtros</i></a>
  </div>
</div>
<div class="lista-productos">
  <form class="tags" action="/productosFiltrados" method="post">
      @csrf
    <h3>Filtros</h3>
    <div class="filtro-precio">
      <p>Precios</p>
        <input type="radio" name="price" value="0"> 0 - 1000 <br>
        <input type="radio" name="price" value="1000"> 1000 - 2000 <br>
        <input type="radio" name="price" value="2000"> 2000 - 3000 <br>
        <input type="radio" name="price" value="3000"> 3000 - 4000 <br>
        <input type="radio" name="price" value="4000"> 4000 - 5000 <br><br>
    </div>
    <div class="filtro-tag">
      <p>Tags</p>
      @foreach ($tags as $tag)
        <input type="checkbox" name="tag" value="{{$tag->id}}"> {{$tag->name}} <br>
      @endforeach
    </div>
    <button type="submit" class="btn btn-success">ENVIAR</button>
    <button type="reset" class="btn btn-outline-secondary">Limpiar</button>
  </form>

  <div class="productos">
    @forelse ($products as $product)
        <article class="vista-producto">
          <div class="caja-imagen">
              <img class="propia-imagen" src="/storage/products/{{$product->featured_img}}" alt="">
          </div>
          <div class="informacion-producto">
            <div class="nombre-descripcion">
              <p>Nombre: {{$product->name}}</p>
              <p>Descripción: {{$product->description}}</p>
            </div>
            <div class="botom-precio">
              <div class="precio">Precio: {{$product->price}}</div>
                <div class="botones-producto">
                  @if (isset($carritoActual))
                    @if ($carritoActual!= null && $carritoActual->contains($product->name))
                      <div class="">Ya lo tienes en el carrito</div><!--Aca puedo meter javascript-->
                    @endif
                  @else
                    <a class="btn btn-outline-info" href="/product/{{$product->id}}">Ver más</a>
                  @endif
                  <a class="btn btn-outline-warning" href="/product/edit/{{$product->id}}">Editar</a>
                </div>
            </div>
          </div>
        </article>
    @empty
      <p>No hay productos en esta categoria</p>
    @endforelse
  </div>
</div>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
