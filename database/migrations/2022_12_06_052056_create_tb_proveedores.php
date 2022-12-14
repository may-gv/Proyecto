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
        Schema::create('tb_proveedores', function (Blueprint $table) {
            $table->id('idProo');
            $table->string('Empresa');
            $table->string('Tipomercancia');
            $table->string('Direccion');
            $table->string('Pais');
            $table->string('Contrato');
            $table->string('Nofijo');
            $table->string('Nocel');
            $table->string('Correo');
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
        Schema::dropIfExists('tb_proveedores');
    }
};
