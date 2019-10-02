<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViajesDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viajes_data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('velocidad');
            $table->string('consumo_gasolina');
            $table->integer('distancia');
            $table->string('latitud');
            $table->string('longitud');
            $table->string('tiempo_de_viaje');
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
        Schema::dropIfExists('viajes_data');
    }
}
