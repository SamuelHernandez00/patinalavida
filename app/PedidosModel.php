<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidosModel extends Model
{
    //
    protected $table = "tb_pedidos";
    protected $primarykey ="id_pedido";
    protected $fillable = [
        'fecha',
        'fecha_entrega',
        'entregado',
        'entrega_domicilio'
    ];
}
