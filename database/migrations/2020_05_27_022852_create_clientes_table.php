<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary key
            $table->unsignedSmallInteger('id_zona'); // Foreign Key
            $table->string('placa')->unique()->nullable();
            $table->time('hora_ingreso');
            $table->time('hora_salida')->nullable();
            $table->integer('tarifa');
            $table->integer('total')->nullable();

            $table->timestamps();

            // Constraint definition foreign key
            $table->foreign('id_zona')->references('id')->on('zonas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
