<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsuariosModel;

class RegisterController extends Controller
{
    //
    public function guardar_registro(Request $request){
         

         
        $usu = UsuariosModel::create(array(
             'nombre' => $request->input('nombre'),
             'nickname' => $request->input('nickname'),
             'apellido_p' => $request->input('apellido_p'),
             'apellido_m' => $request->input('apellido_m'),
             'email' => $request->input('email'),
             'password' => $request->input('password'),
             'telefono' => $request->input('telefono'),
             'img' => $request->input('img'),
             'rank' => 0,
             'activo' => 1,

         ));

         return redirect()->route('index');
    }
}
