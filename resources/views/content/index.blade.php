@extends('layouts.index')

@section('index')


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
<!-- Fin Navegacion -->

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('/img/banner.jpg')}}" class="d-block w-100" alt="...">
      
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/img/marcasban.jpg')}}" class="d-block w-100" alt="...">
      
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/img/banner.jpg')}}" class="d-block w-100" alt="...">
      
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
<!-- Fin Carousel -->

    <section class="sub">
        <div class="container py-5 text-white">
            <div class="row">
                <div class="col-lg-3 ol-md-6 col-12">
                    <div class="row">
                        <div class="col-lg-2">
                            <span><i class="fas fa-shipping-fast"></i></span>
                            <div class="col-lg-10">
                                <h5>Envios Seguros</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ol-md-6 col-12">
                <div class="row">
                        <div class="col-lg-2">
                            <span><i class="fas fa-user-shield"></i></span>
                            <div class="col-lg-10">
                                <h5>Datos Seguros</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ol-md-6 col-12">
                <div class="row">
                        <div class="col-lg-2">
                            <span><i class="fas fa-shopping-bag"></i></span>
                            <div class="col-lg-10">
                                <h5>Garantia del Producto</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ol-md-6 col-12">
                    <div class="row">
                        <a href="{{ route('registro') }}" class="btn1">
                            Registrate</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Fin Info -->
<br>

<section class="collection">
    <div class="container">
        <h1 class="text-center">Productos Nuevos </h1><br>
        
        <div class="row">
        @foreach($productos as $producto)
            <div class="col-lg-3">
                <div class="card">
                    <img src="{{ asset('img/ropa/'. $producto->img) }}" class="img-fluid mb-3" alt="{{ $producto->img}}">
                    <input type="button" value="Add to Card">
                    <h5>{{ $producto->nombre }}</h5>
                    <p> {{ $producto->descripcion }}</p>
                    <p><small><span> $ {{ $producto->precio }} </span></small></p>
                </div>
                  <br>
            </div>
            @endforeach
            <br>
        </div>
       
</section>

<br><br>

<!-- Login -->
<section class="parallex">
    <div class="container py-5 text-white text-center">
        <div class="row py-43">
            <div class="col-lg9">
                <h1>Las mejores Marcas en un solo lugar</h1>
                <p class="py-3">Ingresa y conoce mucho más</p>
                <form action="{{ route('login') }}">
                <button class="btn2 mr-1" > Iniciar Sesion</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection