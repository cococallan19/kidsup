<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('schools', function (Blueprint $table) {
        $table->increments('id');
        $table->string('status');
        $table->string('main_image');
        $table->text('sub_image')->nullable();
        $table->string('school_name');
        $table->string('number');
        $table->string('email');
        $table->string('zip');
        $table->string('pref');
        $table->string('addr01');
        $table->string('addr02');
        $table->string('addr03')->nullable();
        $table->string('lat');
        $table->string('lng');
        $table->string('keywords');
        $table->text('contents')->nullable();
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
        Schema::drop('schools');
    }
}
