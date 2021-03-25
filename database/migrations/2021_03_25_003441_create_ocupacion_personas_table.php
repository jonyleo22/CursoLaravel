<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOcupacionPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ocupacion_personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion_ocupacion');
            $table->string('domicilio_laboral');
            $table->string('telefono_laboral');
            $table->unsignedBigInteger('id_persona');
            $table->foreign('id_persona')->refences('id')->on('personas');
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
        Schema::dropIfExists('ocupacion_personas');
    }
}
