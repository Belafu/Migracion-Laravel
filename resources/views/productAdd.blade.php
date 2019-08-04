@extends('welcome')

@section('title', 'Agregar producto')

@section('content')
<h2 class="text-center mb-4 mt-2">Agregar producto</h2>
<form class="" action="/product-add" method="post" enctype="multipart/form-data">
  @csrf
  {{-- {{csrf_field()}} --}}

  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right" style="font-weight:bold">{{ __('Nombre del producto') }}</label>
      <div class="col-md-6">
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right" style="font-weight:bold">{{ __('Descripcion del Producto') }}</label>

      <div class="col-md-6">
        <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}"  required autocomplete="description" autofocus rows="8" cols="80"></textarea>
          {{-- <input id="name" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus> --}}
          @error('description')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="form-group row">
      <label for="price" class="col-md-4 col-form-label text-md-right" style="font-weight:bold">{{ __('Precio') }}</label>
      <div class="col-md-6">
          <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus min="1" max="99999">
          @error('price')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="form-group row">
      <label for="featured_img" class="col-md-4 col-form-label text-md-right" style="font-weight:bold">{{ __('Imagen') }}</label>
      <div class="col-md-6">
          <input id="featured_img" type="file" class="@error('featured_img') is-invalid @enderror" name="featured_img" value="{{ old('featured_img') }}" required autocomplete="featured_img" autofocus>
          @error('featured_img')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="form-group row">
      <label for="stock" class="col-md-4 col-form-label text-md-right" style="font-weight:bold">{{ __('Stock') }}</label>
      <div class="col-md-6">
          <input id="stock" type="number" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock') }}" required autocomplete="stock" autofocus min="1" max="100">
          @error('stock')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <!--Agregar el tag  con un foreach recorrido-->
  <div class="form-group row">
      <label for="tag" class="col-md-4 col-form-label text-md-right" style="font-weight:bold">{{ __('Tags') }}</label>
      <div class="col-md-6">
        <select class="@error('tag') is-invalid @enderror" name="tag" required>
          <option value="">Elige una categoria</option>
          @foreach ($tags as $key)
          <option value="{{$key->id}}">{{$key->name}}</option>
          @endforeach
        </select>
      </div>
  </div>


    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button class="btn btn-dark" type="submit" class="btn btn-primary">
                {{ __('Enviar') }}
            </button>
        </div>
    </div>
</form>
@endsection
