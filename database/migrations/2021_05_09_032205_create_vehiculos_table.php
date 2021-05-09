<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('placa');
            $table->string('numDocumento');
            $table->string('marca');
            $table->string('linea');
            $table->string('modelo');
            $table->string('cc');
            $table->string('color');
            $table->string('servicio');
            $table->string('clase');
            $table->string('carroceria');
            $table->string('combustible');
            $table->string('capacidad');
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
        Schema::dropIfExists('vehiculos');
    }
}
