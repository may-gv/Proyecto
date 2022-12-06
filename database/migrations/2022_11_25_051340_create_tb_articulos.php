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
        Schema::create('tb_articulos', function (Blueprint $table) {
            $table->id('idArticulo');
            $table->string('Tipo');
            
            $table->unsignedBigInteger('id_prov');
            $table->string('Marca');
            $table->string('Descripcion');
            $table->integer('Cantidad');
            $table->double('PrecioCompra');
            $table->double('PrecioVenta');
            $table->date('FechaIngreso');
            $table->foreign('id_prov')->references('idProo')->on('tb_proveedores')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            
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
        Schema::dropIfExists('tb_articulos');
    }
};
