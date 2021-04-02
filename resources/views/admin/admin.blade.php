@extends('layouts.admin')

@section('admin')

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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Articulos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Ropa</a></li>
            <li><a class="dropdown-item" href="#">Accesorios</a></li>
            
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#" >Blog</a>
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

<div class="form">
    <div class="title">Logueate</div>
    <form action="#">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Correo</span>
                <input type="text" placeholder="asdsada@gmail.com" requed> 
            </div>
            <div class="input-box">
                <span class="details">Contraseña</span>
                <input type="text" placeholder="********" requed> 
            </div>
            
            <br>
            <div class="row">
                        <button class="btn1" route="#"><a href="{{ route('index') }}">
                            Registrate</a></button>
                    </div>
        </div>
    </form>
</div>

@endsection