<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsuariosModel;
use App\ProductosModel;
use App\CategoriasModel;

class PatinaController extends Controller
{
    //
    public function index(Request $request){

        $productos = ProductosModel::all();
        $categorias = CategoriasModel::all();

        return view('content.index')
            ->with(['productos' => $productos])
            ->with(['categorias' => $categorias]); 

    }

    public function productos(Request $request){

        $productos = ProductosModel::all();
        $categorias = CategoriasModel::all();

        return view('content.productos')
            ->with(['productos' => $productos])
            ->with(['categorias' => $categorias]); 

    }
 
    
}
