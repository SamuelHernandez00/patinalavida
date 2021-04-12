<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductosModel extends Model
{
    //
    protected $table ="tb_productos";
    protected $primarykey ="id_producto";
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'img',
        'activo',
    ];

    protected  $attributes = [
        'activo' => 1,
        'img' => null,

    ];
}
