@extends('layouts.admin')

@section('admin')

<nav class="navbar navbar-expand-lg bh-black">
  <div class="container-fluid">
    <img src="{{ asset('/img/logo.jpg') }} " height="100" color="white"><a class="navbar-brand" >PatinaLaVida (Adminstracion)</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('admin_usuarios') }}">Usuarios</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('admin_productos') }}">Productos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('admin') }}">Administradores</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('admin_pedidos') }}">Pedidos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">LOGOUT</a>
        </li>
        
      </ul>
     
    </div>
  </div>
</nav>
<br>
<!--Pestañas -->




@endsection
