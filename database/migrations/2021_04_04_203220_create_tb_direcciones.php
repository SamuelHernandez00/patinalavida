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
            $table->integer('numero_exterior');
            $table->integer('numero_interior')->nullable();
            $table->string('colonia');
            $table->string('cp');
            $table->string('estado');
            $table->string('municipio');
            $table->string('referencia')->nullable();
            $table->integer('activo')->nullable();
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_punto_venta');
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
