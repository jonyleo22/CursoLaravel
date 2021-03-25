<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{

    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dni', 8);
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fecha_nacimiento');
            $table->string('nacionalidad');
            $table->string('email');
            $table->text('otros_contactos')->nullable();
            $table->unsignedBigInteger('id_sexo');
            $table->foreign('id_sexo')->references('id')->on('sexo_personas');
            $table->unsignedBigInteger('id_localidad');
            $table->foreign('id_localidad')->references('id')->on('localidades');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
