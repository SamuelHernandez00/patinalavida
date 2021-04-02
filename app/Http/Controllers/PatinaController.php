<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientesModel;

class PatinaController extends Controller
{
    //
    public function guardar_registro(Request $request){
         $usu = ClientesModel::create(array(

             'nombre' => $request->input('nombre'),
             'usuario' => $request->input('usuario'),
             'correo' => $request->input('correo'),
             'password' => $request->input('password'),
             'cpassword' => $request->input('cpassword'),

         ));

         return redirect()->route('index');
    }
    
}
