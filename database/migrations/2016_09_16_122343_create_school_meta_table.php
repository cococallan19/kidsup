<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('school_meta', function (Blueprint $table) {
        $table->increments('meta_id');
        $table->integer('school_id');
        $table->string('meta_key');
        $table->string('meta_value');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('school_meta');
    }
}
