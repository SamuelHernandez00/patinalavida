<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_usuarios', function (Blueprint $table) {
            $table->bigIncrements('id_usuario');
            $table->string('nombre',50);
            $table->string('nickname',30);
            $table->string('apellido_p',30);
            $table->string('apellido_m',30);
            $table->string('email',30)->unique();
            $table->string('telefono',20)->nullable();
            $table->string('password',20);
            $table->string('img',45)->nullable();
            $table->integer('rank')->nullable();
            $table->integer('activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_usuarios');
    }
}
