<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbDirecciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_direcciones', function (Blueprint $table) {
            $table->bigIncrements('id_direccion');
            $table->string('calle');
            $table->integer('numero');
            $table->integer('numero_exterior');
            $table->string('colonia');
            $table->string('cp');
            $table->string('estado');
            $table->string('municipio');
            $table->string('referencia');
            $table->integer('activo');
            $table->bigInteger('id_usuario');
            $table->bigInteger('id_punto_venta');
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
        Schema::dropIfExists('tb_direcciones');
    }
}
