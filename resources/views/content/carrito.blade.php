@extends('layout.carrito')

@section(carrito)

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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('productos') }}" >Productos</a>
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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Carrito de compras</div>
                        <div class="car-body">
                            @if(session('satus'))
                            <div class="alert alert-succes">
                                {{session('status')}}
                            </div>
                            @endif

                           @foreach($productos as $producto)

                                {{$producto->nombre}}
                                {{$prodcuto->precio}}
                                
                                ${{$producto->precio}}
                                <img src="{{ asset('img/ropa/'. $producto->img) }}" width="50">

                           @endforeach
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection