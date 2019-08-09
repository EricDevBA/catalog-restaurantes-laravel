<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cardapio extends Migration
{

    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->float('price');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('cardapio');
    }
}
