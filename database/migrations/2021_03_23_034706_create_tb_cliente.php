<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cliente', function (Blueprint $table) {
            $table->bigIncrements('id_cliente');
            $table->string('nombre',50);
            $table->string('usuario',30);
            $table->string('correo',30);
            $table->string('password',30);
            $table->string('cpassword',30);
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
        Schema::dropIfExists('tb_cliente');
    }
}
