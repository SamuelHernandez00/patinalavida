@extends('layouts.registro')

@section('registro')

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


<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{ route('nuevo_usuario') }}" method="post">
        {{ csrf_field() }}
				
					<span class="login100-form-title p-b-43">
						Registrate
					</span>
					
					
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="nombre" placeholder="Nombre" required>
					
					</div>

          <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="nickname" placeholder="Usuario" required>
					
					</div>

          <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="apellido_p" placeholder="Apellido Paterno" required>
					
					</div>

          <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="apellido_m" placeholder="Apellido Materno" required>
					
					</div>
					
          <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="email" placeholder="email" required>
					
					</div>

          <div class="wrap-input100 validate-input" >
						<input id="password" class="input100" type="password" name="password" placeholder="**************" onkeyup="evaluar(this);" required>
					</div>


          <b id="nivel"></b><br>
          <b id="error"></b><br>


          <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="telefono" placeholder="Telefono">
					
					</div>
          
          
						<input  type="hidden" name="rank" value="usuario">
					
          
  
		
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" >
							Registrate
						</button>
					</div>
					
					

					
				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>

  

@endsection