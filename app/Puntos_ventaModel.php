<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puntos_ventaModel extends Model
{
    //
    protected $table = "tb_puntos_venta";
    protected $primarykey ="id_punto_venta";
    protected $fillable = [
        'nombre',
        'logo'
    ];
}
