<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKinderAttendToReservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('reservation', function (Blueprint $table) {
          $table->string('kinder_attend');
          $table->string('primary_attend');
          $table->string('start_season')->nullable();
          $table->string('trigger')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('reservation', function (Blueprint $table) {
        $table->dropColumn('kinder_attend');
        $table->dropColumn('primary_attend');
        $table->dropColumn('start_season');
        $table->dropColumn('trigger');
      });
    }
}
