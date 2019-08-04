@extends('welcome')
@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top: 20px;" >
                <div class="card-header" style="background-color: black; color:white;">{{ __('Editar Perfil') }}</div>

                <div class="card-body" style="border: 3px solid black;">
                    <form method="POST" action="/editarPerfil/{{$usuario->id}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" style="font-weight:bold;" placeholder="Ingrese su nuevo Nombre">{{ __('Modificar Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$usuario->name}}" required autocomplete="name" autofocus>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="font-weight:bold;">{{ __('Modificar Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$usuario->email}}" required autocomplete="email" placeholder="Ingrese su nuevo Email"autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="font-weight:bold">{{ __('Modificar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button class="btn btn-dark"type="submit" class="btn btn-primary">
                                    {{ __('Enviar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<h1 style="text-align:center">COMPRAS REALIZADAS</h1>
  @forelse($compras as $comp)

    <div class="data-compra">
      <p>Cant: {{$comp->cant}}</p>
      <p>Producto: {{$comp->name}}</p>
      <p>Precio: {{$comp->price}}</p>
    </div>
    @empty
      <h2 style="margin-top: 20px">NO HAY COMPRAS REALIZADAS</h2>

    @endforelse

</div>





  </body>
</html>
@endsection
