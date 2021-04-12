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

        if(count($usu) == ''){
            $request->session()->put('session_id', $usu->id_usuario);
            $request->session()->put('session_name', '', $usu->nombre);
            $request->session()->put('session_rank', $usu->rank);
            $request->session()->put('session_img', $usu->img);

            $session_id = $request->session()->get('session_id');
            $session_name = $request->session()->get('session_name');
            $session_rank = $request->session()->get('session_rank');
            $session_img = $request->session()->get('session_img');

            if( $session_rank == 1 ){
                return redirect()->route('admin');
            }else{
                if($session_rank == 0){
                    return redirect()->route('index')
                        ->with(['mensaje' => 'Favor de registrarse antes de Loguearte']);
                    
                }
            }
           
        }
                
           
    }

}
