@extends('welcome')

@section('title', 'Vista de productos')

@section('content')

<h2 class="h2-products">Lista de Productos</h2>
<div class="caja-filtro">
  <div class="botom-filtro">
    <a  href="#"> <i class="fas fa-filter">Filtros</i></a>
  </div>
</div>
<div class="lista-productos">
  <form class="tags" action="/productosFiltrados" method="get">
      @csrf
    <h3>Filtros</h3>
    <div class="filtro-precio">
      <p>Precios</p>
      @for ($i = 0; $i < 6; $i++)
        @if (isset($_GET['price']) && $_GET['price']== $i*1000 )
          <input type="radio" name="price" value="{{$i*1000}}" checked> {{$i*1000}} - {{($i+1)*1000}}<br>
        @else
          <input type="radio" name="price" value="{{$i*1000}}" > {{$i*1000}} - {{($i+1)*1000}} <br>
        @endif
      @endfor
    </div>
    <div class="filtro-tag">
      <p>Tags</p>
      @foreach ($tags as $tag)
        @if (isset($_GET['tag']) && $_GET['tag']== $tag->id )
          <input type="radio" name="tag" value="{{$tag->id}}" checked> {{$tag->name}} <br>
        @else
          <input type="radio" name="tag" value="{{$tag->id}}"> {{$tag->name}} <br>
        @endif
      @endforeach
    </div>
    <br>
    <br>
    <div class="botones-fitrar">
      <a href="/products"  class="btn btn-outline-secondary">Limpiar</a>
      <button type="submit" class="btn btn-outline-success">Filtar</button>
    </div>

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
                    @if ($carritoActual->contains($product->name))
                      <div class="">Ya lo tienes en el carrito</div><!--Aca puedo meter javascript-->
                    @else
                      <a class="btn btn-dark " href="/product/{{$product->id}}">Ver más</a>
                    @endif
                  @else
                    <a class="btn btn-dark " href="/product/{{$product->id}}">Ver más</a>
                  @endif

                  @if ( Auth::user()!= null)
                    @if (Auth::user()->rol == 1)

                        <a class="btn btn-warning" href="/product/edit/{{$product->id}}">Editar</a>

                    @endif

                  @endif

                </div>
            </div>
          </div>
        </article>
    @empty
      <p>No hay productos en esta categoria</p>
    @endforelse
  </div>
</div>
@if ( Auth::user()!= null && Auth::user()->rol == 1)

      <a class="btn btn-info" href="/product-add">Añadir Producto</a>
      
@endif

<script type="text/javascript" src="js/productos.js"></script>
@endsection
