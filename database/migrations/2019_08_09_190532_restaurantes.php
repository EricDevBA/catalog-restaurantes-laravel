<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Restaurantes extends Migration
{

    public function up()
    {
        Schema::create('restaurant', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('adress');
            $table->string('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('restaurantes');
    }
}
