@extends('welcome')

@section('title', 'Vista de productos')

@section('content')

<h2>Lista de productos</h2>
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
            <p>Nombre: {{$product->name}}</p>
            <p>Descripción: {{$product->description}}</p>
            <p>Precio: {{$product->price}}</p>
              <div class="botones-producto">
                <a href="/product/{{$product->id}}">Ver más</a>
                <a href="/product/edit/{{$product->id}}">Editar</a>
              </div>
          </div>
        </article>
    @empty
      <p>No hay productos en esta categoria</p>
    @endforelse
  </div>
</div>

@endsection
