<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos_has_pedidos extends Model
{
    //
    protected $table = "tb_productos_has_pedidos";
    protected $fillable = [
        'id_productos',
        'id_pedido'
    ];
}
