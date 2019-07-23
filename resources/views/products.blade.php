@extends('welcome')

@section('title', 'Vista de productos')

@section('content')

<h2>Lista de productos</h2>
<div class="lista-productos">
  <div class="tags">
    <h3>Filtros</h3>
    <div class="filtro-precio">
      <p>Precios</p>
      @if (isset($_GET['min']) && isset($_GET['max']))
        @if ($_GET['min']== 0 && $_GET['max']==500)
          <button type="button" class="btn btn-primary"> </button> 0 - 500 <br>
        @else
          <a class="btn btn-outline-info" href="/productosFiltrados?min=0&&max=500"> </a> 0 - 500 <br>
        @endif

        @if ($_GET['min']== 500 && $_GET['max']==1000)
          <button type="button" class="btn btn-primary"> </button> 500 - 1000 <br>
        @else
          <a class="btn btn-outline-info" href="/productosFiltrados?min=500&&max=1000"> </a> 500 - 1000 <br>
        @endif

        @if ($_GET['min']== 1000 && $_GET['max']==2000)
          <button type="button" class="btn btn-primary"> </button> 1000 - 2000 <br>
        @else
          <a class="btn btn-outline-info" href="/productosFiltrados?min=1000&&max=2000"> </a> 1000 - 2000 <br>
        @endif
      @else
          <a class="btn btn-outline-info" href="/productosFiltrados?min=0&&max=500"> </a> 0 - 500 <br>
          <a class="btn btn-outline-info" href="/productosFiltrados?min=500&&max=1000"> </a> 500 - 1000 <br>
          <a class="btn btn-outline-info" href="/productosFiltrados?min=1000&&max=2000"> </a> 1000 - 2000 <br><br>
      @endif

        <a class="btn btn-outline-secondary" href="/products">Limpiar</a>
    </div>
    <div class="filtro-tag">
      <p>Tags</p>
      @foreach ($tags as $tag)
        @if (isset($_GET['tag']))
          @if ($_GET['tag']==$tag->id)
            <button type="button" class="btn btn-primary"> </button> {{$tag->name}} <br>
          @else
            <a class="btn btn-outline-info" href="/productosFiltrados?tag={{$tag->id}}"> </a> {{$tag->name}} <br>
          @endif
        @else
          <a class="btn btn-outline-info" href="/productosFiltrados?tag={{$tag->id}}"> </a> {{$tag->name}} <br>
        @endif
      @endforeach
    </div>
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
