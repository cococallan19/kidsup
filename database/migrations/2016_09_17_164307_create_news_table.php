<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('news', function (Blueprint $table) {
        $table->increments('id');
        $table->string('status');
        $table->string('main_image');
        $table->string('title');
        $table->integer('category_id');
        $table->string('keywords');
        $table->text('contents');
        $table->timestamp('published_at')->nullable();
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
      Schema::drop('news');
    }
}
