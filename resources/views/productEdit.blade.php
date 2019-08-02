@extends('welcome')

@section('title', 'Editar producto')

@section('content')
<h2>Editar producto</h2>
<form class="" action="/product/edit/{{$product->id}}" method="post" enctype="multipart/form-data">
  @csrf
  {{-- {{csrf_field()}} --}}
  <p>
    <input type="text" name="name" value="{{$product->name}}" placeholder="nombre producto">
  </p>
  <p>
    <input type="text" name="description" value="{{$product->description}}" placeholder="descripción producto">
  </p>
  <p>
    <input type="number" name="price" value="{{$product->price}}" placeholder="precio">
  </p>
  <p>
    <input type="file" name="featured_img" value="">
  </p>
  <p>Imagen actual</p>
  <img src="/storage/products/{{$product->featured_img}}" alt="">
  <p><button class="btn btn-success"type="submit">Enviar</button></p>


  <form class="" action="/product/{id}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$product->id}}">
    <button class="btn btn-danger"type="submit"> Borrar </button>
  </form>
  {{-- <button type="reset">Limpiar</button> --}}
</form>
@endsection
