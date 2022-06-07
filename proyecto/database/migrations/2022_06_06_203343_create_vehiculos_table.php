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
            $table->bigIncrements('ID')->unique();
            $table->unsignedBigInteger('IDPLACAS');
            $table->string('PROPIETARIO', 50)->nullable();
            $table->string('NUMPLACA', 7)->nullable();
            $table->string('MARCA', 50)->nullable();
            
            $table->foreign('IDPLACAS', 'FK_VEHICULO_RELATIONS_PLACAS')->references('ID')->on('placas')->onDelete('cascade')->onUpdate('cascade');
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
