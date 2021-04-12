<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbPuntosVentaHasProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_puntos_venta_has_productos', function (Blueprint $table) {
            $table->unsignedBiginteger('id_punto_venta');
            $table->unsignedBiginteger('id_producto');
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
        Schema::dropIfExists('tb_puntos_venta_has_productos');
    }
}
