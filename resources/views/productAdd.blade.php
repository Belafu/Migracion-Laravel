@extends('welcome')

@section('title', 'Agregar producto')

@section('content')
<h2>Agregar producto</h2>
<form class="" action="/product-add" method="post" enctype="multipart/form-data">
  @csrf
  {{-- {{csrf_field()}} --}}
  <p>
    <input type="text" name="name" value="" placeholder="nombre producto">
  </p>
  <p>
    <input type="text" name="description" value="" placeholder="descripción producto">
  </p>
  <p>
    <input type="number" name="price" value="" placeholder="precio">
  </p>
  <p>
    <input type="file" name="featured_img" value="">
  </p>
  <select class="" name="tag">
    @foreach ($tags as $key)
    <option value="{{$key->id}}">{{$key->name}}</option>
    @endforeach
  </select>

<!--Agregar el tag  con un foreach recorrido-->

  <button type="submit">Enviar</button>
  {{-- <button type="reset">Limpiar</button> --}}
</form>
@endsection
