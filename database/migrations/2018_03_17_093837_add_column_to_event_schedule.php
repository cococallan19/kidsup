<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToEventSchedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('event_schedule', function (Blueprint $table) {
          //#188 201803 説明会に定員をつける、201803 説明会の公開範囲を、全体ページと個別ページで分ける
          $table->string('restrict')->nullable();
          $table->integer('capacity');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('event_schedule', function (Blueprint $table) {
        $table->dropColumn('restrict');
        $table->dropColumn('capacity');
      });
    }
}
