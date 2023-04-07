<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddChildNameToInquiryReservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('reservation', function (Blueprint $table) {
          $table->string('name_child')->nullable()->comment('10/11追加_お子様氏名');
          $table->string('birth')->nullable()->comment('10/11追加_お子様生年月日');
      });
      Schema::table('inquiry', function (Blueprint $table) {
          $table->string('name_child')->nullable()->comment('10/11追加_お子様氏名');
          $table->string('birth')->nullable()->comment('10/11追加_お子様生年月日');
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
        $table->dropColumn('name_child');
        $table->dropColumn('birth');
      });
      Schema::table('inquiry', function (Blueprint $table) {
        $table->dropColumn('name_child');
        $table->dropColumn('birth');
      });
    }
}
