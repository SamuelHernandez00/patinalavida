<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puntos_has_productos extends Model
{
    //
    protected $table = "tb_puntos_venta_has_productos";
    protected $fillable = [
        'id_punto_venta',
        'id_producto'
    ];
}
