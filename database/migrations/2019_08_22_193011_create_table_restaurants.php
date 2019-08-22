<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRestaurants extends Migration
{

    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('address');
            $table->text('description');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
}
