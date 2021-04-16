<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsuariosModel;
use App\ProductosModel;
use App\CategoriasModel;

class AdminController extends Controller
{
    //
    public function admin(){
    $adm = \DB::select('SELECT * FROM tb_usuarios where rank=1 ');
    $usu = UsuariosModel::all();

    return view('admin.admin')
        ->with(['adm' => $adm ])
        ->with(['usu' => $usu ]);
    }

    public function admin_usuarios(){
        $usu = \DB::select('SELECT * FROM tb_usuarios');
    
        return view('admin.admin_usuarios')
            ->with(['usu' => $usu ]);
        }

    public function admin_productos(){
        $productos = ProductosModel::all();
        
        return view('admin.admin_productos')
            ->with(['productos' => $productos ]);
    }

    public function admin_pedidos(){
        $ped = \DB::select('SELECT * FROM tb_pedidos');
        
        return view('admin.admin_pedidos')
            ->with(['ped' => $ped ]);
    }
        //Editar Usuario

        public function editar_usuario($id){
            
            
            $user = UsuariosModel::find($id);
            dd($id);
            }

   
    public function borrar_usuario($id)
    {
        $id = ProductosModel::find($id);
        $id->delete();
        return redirect()->route('content.administrar_usuario');
    }

    public function usuario(){

        $usuarios = UsuariosModel::all();
        $productos = ProductosModel::all();
        $categorias = CategoriasModel::all();


        return view('usuario.usuario')
            ->with(['productos' => $productos])
            ->with(['categorias' => $categorias])
            ->with(['usuarios' => $usuarios]);
    }
}
