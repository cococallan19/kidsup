<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterEventScheduleIssue207 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('event_schedule', function (Blueprint $table) {
          $table->string('taiken')->nullable()->comment('2020/04/02追加_体験メール送らないフラグ');
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
        $table->dropColumn('taiken');
      });
    }
}
