@extends('welcome')

@section('title', 'Detalle de producto')

@section('content')




        <article class="info-productos infooo">

          <div class="foto-producto">
            <img src="/storage/products/{{$product->featured_img}}" alt="">
          </div>

          <div class="info-producto">
            <h2>Detalle {{$product->name}}</h2>
            <p>Nombre: {{$product->name}}</p>
            <p>Descripción: {{$product->description}}</p>
            <p>Precio: {{$product->price}}</p>

            <form class="" action="/product/{id}" method="post">
              @csrf
              <input type="hidden" name="id" value="{{$product->id}}">
              {{-- <button type="submit"> borrar </button> --}}
            </form>

            <a href="/product/addtocart/{{$product->id}}"><button class="btn btn-dark" type="submit" name="button">Agregar al carrito</button></a>
          </div>

        </article>



@endsection
