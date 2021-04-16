@extends('layouts.edit_usuario')

@section(edit_usuario)


<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" name="edit_usuario" action="{{ route('salvar_usuario', ['id' = $usus->id_usuario]) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT')}}
				
					<span class="login100-form-title p-b-43">
						Registrate
					</span>
					
					
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="nombre" placeholder="Nombre" value="{{ $usus->nombre }}" required>
					
					</div>

          <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="nickname" placeholder="Usuario" value="{{ $usus->nickname }}" required>
					
					</div>

          <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="apellido_p" placeholder="Apellido Paterno"  value="{{ $usus->apellido_p }}"required>
					
					</div>

          <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="apellido_m" placeholder="Apellido Materno" value="{{ $usus->apellido_m }}" required>
					
					</div>
					
          <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="email" placeholder="email" value="{{ $usu->email }}" required>
					
					</div>

                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="file" name="img" value="{{ $usu->img }}" required>
					
					</div>


          <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="telefono" placeholder="Telefono" value="{{ $usu->telefono }}" >
					
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