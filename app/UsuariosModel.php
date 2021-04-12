<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuariosModel extends Model
{
    //
    protected $table = "tb_usuarios";
    protected $primarykey ="id_usuario";
    protected $fillable = [
        'nombre',
        'nickname',
        'apellido_p',
        'apellido_m',
        'email',
        'telefono',
        'password',
        'img',
        'rank',
        'activo'
    ];

    protected  $attributes = [
        'activo' => 1,
        'img' => null,
        'telefono' =>null
    ];
}
