<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsuariosModel;
use App\ProductosModel;

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
        $usu = UsuariosModel::all();
    
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
            
            $usu = UsuariosModel::find($id);
        
            return view('admin.admin_usuarios')
                ->with(['usu' => $usu ]);
            }

    public function salvar_usuario(UsuariosModel $id, Request $request){


        $id->update($request->only('nombre','apellido_p','apellido_m','email','telefono','img','rank','activo'));

        return redirect()->route('administrar_usuarios', ['id' => $id->id_usuario]);
    }
}
