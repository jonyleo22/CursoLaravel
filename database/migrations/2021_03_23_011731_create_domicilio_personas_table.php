<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomicilioPersonasTable extends Migration
{

    public function up()
    {
        Schema::create('domicilio_personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('domicilio_personas');
    }
}
