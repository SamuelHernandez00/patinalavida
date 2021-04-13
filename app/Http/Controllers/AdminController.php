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

    return view('admin.admin')
        ->with(['adm' => $adm ]);
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
}
