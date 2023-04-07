<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('banks', function (Blueprint $table) {
      $table->increments('id');
      $table->string('status');
      $table->string('email')->nullable();
      $table->string('sendid')->nullable();
      $table->string('order_no')->nullable();
      $table->string('tracking_no')->nullable();
      $table->string('acc_name')->nullable();
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
        Schema::drop('banks');
    }
}
