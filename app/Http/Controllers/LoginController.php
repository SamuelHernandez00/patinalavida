<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminModel;

class LoginController extends Controller
{
    //
    public function login(){
        return view('login.login');
    }

    public function validar_login(Request $request)
    {

        $correo = $request->input('correo');
        $password = $request->input('password');

        //-------------------consulta CLIENTES 
        $consulta = AdminModel::where('correo', '=', $correo)
            ->where('password', '=', $password)
            ->get();

                    return view('content.index');
                
           
    }

}
