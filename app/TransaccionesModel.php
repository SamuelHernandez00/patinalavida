<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaccionesModel extends Model
{
    //
    protected $table = "tb_transacciones";
    protected $primarykey ="id_transaccion";
    protected $fillable = [
        'no_factura',
        'subtotal',
        'total'
    ];
}
