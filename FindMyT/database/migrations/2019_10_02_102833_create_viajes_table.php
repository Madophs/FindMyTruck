<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viajes', function (Blueprint $table) {
            $table->increments('id');
            $table->float('salida_longitud');
            $table->float('salida_latitud');
            $table->float('destino_longitud');
            $table->float('destino_latitud');
            $table->integer('temperatura');
            $table->integer('viaje_data_id')->unsigned();
            $table->integer('conductor_id')->unsigned();
            $table->integer('vehiculo_id')->unsigned();
            $table->foreign('viaje_data_id')->references('id')->on('viajes_data')->onDelete('cascade');
            $table->foreign('conductor_id')->references('id')->on('conductores')->onDelete('cascade');
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos')->onDelete('cascade');
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
        Schema::dropIfExists('viajes');
    }
}
