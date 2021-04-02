<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientesModel extends Model
{
    //
    protected $table = "tb_cliente";
    protected $primarykey ="id_cliente";
    protected $fillable = [
        'nombre',
        'usuario',
        'correo',
        'password',
        'cpassword'

    ];
}
