<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('entries', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('parent');
        $table->string('age')->nullable();
        $table->string('sns')->nullable();
        $table->string('tel')->nullable();
        $table->string('email');
        $table->string('photo')->nullable();;
        $table->text('pr')->nullable();
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
        Schema::dropIfExists('entries');
    }
}
