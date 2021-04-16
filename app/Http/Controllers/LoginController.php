<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminModel;
use App\UsuariosModel;

class LoginController extends Controller
{
    //
    public function login(){
        return view('login.login');
    }

    public function validar_login(Request $request)
    {

        $email = $request->input('email');
        $pass = $request->input('password');

        $usu = UsuariosModel::where('email', '=', $email)
                ->where('password', '=', $pass)
                ->get();

               return redirect()->route('usuario');
            

           
       
    }
                
           

}
