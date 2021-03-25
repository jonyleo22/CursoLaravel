<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSexoPersonasTable extends Migration
{

    public function up()
    {
        Schema::create('sexo_personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_sexo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sexo_personas');
    }
}
