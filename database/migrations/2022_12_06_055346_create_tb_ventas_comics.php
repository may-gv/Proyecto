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
        Schema::create('tb_ventas_comics', function (Blueprint $table) {
            $table->id('idVentaCo');
            $table->unsignedBigInteger('id_usu');
            $table->unsignedBigInteger('id_comic');
            $table->integer('Cantidad');
            $table->date('Fecha');
            $table->timestamps();
            $table->foreign('id_usu')->references('idusu')->on('tb_usuarios')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('id_comic')->references('idComic')->on('tb_comics')
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
        Schema::dropIfExists('tb_ventas_comics');
    }
};
