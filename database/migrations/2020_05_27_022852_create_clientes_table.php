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
            $table->string('placa')->unique()->nullable();
            $table->time('hora_ingreso');
            $table->time('hora_salida')->nullable();
            $table->integer('tarifa');
            $table->integer('total')->nullable();

            $table->timestamps();

            // Constraint definition foreign key
            
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
