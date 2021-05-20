<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBusquedas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('busquedas', function (Blueprint $table) {
            $table->increments('idBusqueda');
            $table->unsignedInteger('idRubro');
            $table->foreign('idRubro')->references('idRubro')->on('rubros');
            $table->string('empresa');
            $table->string('titulo');
            $table->string('descripcion');
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
        Schema::dropIfExists('busquedas');
    }
}