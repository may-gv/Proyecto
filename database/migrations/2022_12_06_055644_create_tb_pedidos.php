<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pedidos', function (Blueprint $table) {
            $table->id('idPed');
            $table->unsignedBigInteger('id_usu');
            $table->unsignedBigInteger('id_pro');
            $table->string('Tipopedido');
            $table->integer('Cantidadcomi');
            $table->integer('Cantidadpedi');
            $table->timestamps();
            $table->foreign('id_usu')->references('idusu')->on('tb_usuarios')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('id_pro')->references('idProo')->on('tb_proveedores')
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
};
