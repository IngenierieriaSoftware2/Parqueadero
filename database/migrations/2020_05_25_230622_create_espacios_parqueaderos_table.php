<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspaciosParqueaderosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espacios_parqueaderos', function (Blueprint $table) {
            $table->id();
            $table->string('placa')->unique();
            $table->time('hora_ingreso');
            $table->time('hora_salida')->nullable();
            $table->integer('tarifa');
            $table->integer('total')->nullable();
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
        Schema::dropIfExists('espacios_parqueaderos');
    }
}
