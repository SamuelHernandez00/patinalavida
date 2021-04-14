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

                if(count($usu) == 1){
                    $request->session()->put('session_id', $usu->id_usuario);
                    $request->session()->put('session_name', $usu->nombre_usuario);
                    $request->session()->put('session_tipo', 'usuario');

                    $session_id = $request->session()->get('session_id');
                    $session_name = $request->session()->get('session_name');
                    $session_tipo = $request->session()->get('session_tipo');

                    return redirect()->route('admin');
                }else{
                    if (count($usu) == 1){
                        return redirect()->route('registro');
                    }
                }
            

           
       
    }
                
           

}
