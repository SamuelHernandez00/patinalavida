@extends('layouts.productos')

@section('productos')

    <!-- Encabezado -->
<nav class="navbar navbar-expand-lg bh-black">
  <div class="container-fluid">
    <img src="{{ asset('/img/logo.jpg') }} " height="100"><a class="navbar-brand" href="#">Patina La Vida</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
        </li>
        
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
<br>
<!-- Fin Navegacion -->

<section class="collection">
    <div class="container">
        <h1 class="text-center">Todos los productos </h1><br>
        
        <div class="row">
        @foreach($productos as $producto)
            <div class="col-lg-3">
                <div class="card">
                    <img src="{{ asset('img/ropa/'. $producto->img) }}" class="img-fluid mb-3" alt="{{ $producto->img}}">
                    <input type="button" value="Add to Card">
                    <h5>{{ $producto->nombre }}</h5>
                    <p>{{ $producto->descripcion }}</p>
                    <p><small><span> $ {{ $producto->precio }} </span></small></p>
                </div>
                  <br>
            </div>
            @endforeach
            <br>
        </div>
       
</section>

<br><br>

@endsection