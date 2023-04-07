<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInquiryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('inquiry', function (Blueprint $table) {
        $table->increments('id');
        $table->string('school_name');
        $table->integer('school_id')->nullable();
        $table->string('name');
        $table->string('tel');
        $table->string('email');
        $table->string('age');
        $table->text('body')->nullable();
        $table->string('send_flg')->nullable()->comment('外部への転送フラグ');
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
      Schema::drop('inquiry');
    }
}
