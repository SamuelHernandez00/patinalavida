<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DireccionesModel extends Model
{
    //
    protected $table = "tb_direcciones";
    protected $primarykey ="id_direccion";
    protected $fillable = [
        'calle',
        'numero_exterior',
        'numero_interior',
        'colonia',
        'cp',
        'estado',
        'municipio',
        'referencia',
        'activo',
    ];

    protected  $attributes = [

        'activo' => 1,
        'numero_interior' => null,
        'referencia' => null
        
    ];
}
