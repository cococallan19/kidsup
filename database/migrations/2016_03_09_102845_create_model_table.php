<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('models', function (Blueprint $table) {
      $table->increments('id');
      $table->string('plans');
      $table->string('name');
      $table->string('kana');
      $table->string('parents');
      $table->string('number');
      $table->string('email');
      $table->string('image');
      $table->string('body');
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
        Schema::drop('models');
    }
}
