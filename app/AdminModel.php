<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    //
    protected $table = "tb_admin";
    protected $primarykey ="id_admin";
    protected $fillable = [
        'nombre',
        'usuario',
        'correo',
        'password',

    ];

}
