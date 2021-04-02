<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_producto', function (Blueprint $table) {
            $table->bigIncrements('id_producto');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('precio');
            $table->bigInteger('id_categoria');
            $table->string('Foto');
            $table->bigInteger('id_pventa');
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
        Schema::dropIfExists('tb__producto');
    }
}
