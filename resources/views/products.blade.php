@extends('welcome')

@section('title', 'Agregar producto')

@section('content')

<h2>Lista de productos</h2>
<div class="lista-productos">
  <div class="tags">
    <p>Filtros</p>
    <ul>
      <li>100-200</li>
      <li>100-200</li>
      <li>100-200</li>
      <li>100-200</li>
      <li>100-200</li>
      <li>100-200</li>
      <li>100-200</li>
      <li>100-200</li>
    </ul>
  </div>
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
