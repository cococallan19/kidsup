<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('event_schedule', function (Blueprint $table) {
        $table->increments('event_id');
        $table->string('date');
        $table->string('time');
        $table->string('school_id');
        $table->string('release_date');
        $table->string('status');
        $table->string('relational_school');
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
      Schema::drop('event_schedule');
    }
}
