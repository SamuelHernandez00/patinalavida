@extends('layouts.admin_productos')

@section('admin_productos')

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

<div class="container">
	<div class="mx-auto col-sm-8 main-section" id="myTab" role="tablist">
		<ul class="nav nav-tabs justify-content-end">
			<li class="nav-item">
			<a class="nav-link active" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false">List</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="form-tab" data-toggle="tab" href="#form" role="tab" aria-controls="form" aria-selected="true">Form</a>				   	
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
      <!--Cards -->
      
          <div class="card">
	          <div class="card-header">
		          <h4>List</h4>
	          </div>
            
	          <div class="card-body">
		            <div class="table-responsive">
                
	                  <table id="userList" class="table table-bordered table-hover table-striped">
	                    	
                        <thead class="thead-light">
		                      <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Rank</th>
                            <th scope="col">Activo</th>
                            <th></th>
                          </tr>
                          </thead>
                          
                          <tbody>
                          @foreach($pro as $prod)
                          <tr>
                            <th scope="row">{{ $prod->id_usuario }}</th>
                            <td>{{ $prod->nombre }}</td>
                            <td>{{ $prod->apellido_p }} {{$prod->apellido_m }}</td>
                            <td>{{ $prod->nickname }}</td>
                            <td>{{ $prod->email }}</td>
                            <td>{{ $prod->rank }}</td>
                            <td>{{ $prod->activo }}</td>
                            <td>
                              <a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-user-times"></i></a>
                            </td>
                          </tr>
                          @endforeach
                          </tbody>
                        </table>
                    
                      </div>
                      
	          </div>
          </div>
       

			</div>
      
			<div class="tab-pane fade" id="form" role="tabpanel" aria-labelledby="form-tab">
      <!--Cards -->
      
      <div class="card">
	          <div class="card-header">
		          <h4>Form</h4>
	          </div>
	          <div class="card-body">
            <form class="form" role="form" autocomplete="off">
            {{ csrf_field() }}
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">First name</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" >
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Last
                  name</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" >
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                <div class="col-lg-9">
                  <input class="form-control" type="email">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Username</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Password</label>
                <div class="col-lg-9">
                  <input class="form-control" type="password">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Confirm</label>
                <div class="col-lg-9">
                  <input class="form-control" type="password" >
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-12 text-center">
                  <input type="reset" class="btn btn-secondary" value="Cancel">
                  <input type="button" class="btn btn-primary"
                    value="Save Changes">
                </div>
              </div>
            </form>

	          </div>
          </div>
			</div>
		</div>
	</div>
</div>



@endsection
