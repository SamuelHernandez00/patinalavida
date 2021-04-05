<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbPedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pedidos', function (Blueprint $table) {
            $table->bigIncrements('id_pedido');
            $table->bigInteger('id_usuario');
            $table->bigInteger('id_direccion');
            $table->bigInteger('id_transaccion');
            $table->date('fecha');
            $table->date('fecha_entrega');
            $table->integer('entregado');
            $table->integer('entrega_domicilio');
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
        Schema::dropIfExists('tb_pedidos');
    }
}
