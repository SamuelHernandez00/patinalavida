@extends('layouts.admin_usuarios')

@section('admin_usuarios')

<nav class="navbar navbar-expand-lg bh-black">
  <div class="container-fluid">
    <img src="{{ asset('/img/logo.jpg') }} " height="100" color="white"><a class="navbar-brand" >PatinaLaVida (Adminstracion)</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
      
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

     <!--Cards -->
      
     <center>
<br> <a href="#">Agregar producto</a> 
 <H2>|| PRODUCTOS ||</H2>
<div id="table">
  <table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Email</th>
        <th>Img</th>
        <th>Rank</th>
        <th>Activo</th>
        <th>Editar</th>
        <th>Borrar</th>
    </tr>
    </thead>
    @foreach($usu as $usus)
    <tr>
        <td>{{ $usus->id_usuario }}</td>
        <td>{{ $usus->nombre }}</td>
        <td>{{ $usus->apellido_p }} {{ $usus->apellido_m }}</td>
        <td>{{ $usus->email }}</td>
        <td>{{ $usus->img }}</td>
        <td>{{ $usus->rank }}</td>
        <td><img src="{{ asset('img/'.$usus->img) }}" alt="{{ $usus->img}}" width="50"></td>
        
        <td><a href=" {{ route('editar_usuario', ['id' => $usus->id_usuario]) }}"><img src="data:image/png;base64,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" width="50"></a></td>

        <td><a href=" {{ route('borrar_usuario', ['id' => $usus->id_usuario]) }}"><img src="https://image.flaticon.com/icons/png/512/61/61848.png" width="50"> </a></td>
   

        </tr>
        
   
    @endforeach
    </table>
</div>    
</center>
		            
			    
      <!--Cards -->
      
      


@endsection
