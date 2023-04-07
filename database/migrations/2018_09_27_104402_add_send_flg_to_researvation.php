<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSendFlgToResearvation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('reservation', function (Blueprint $table) {
          $table->string('send_flg')->nullable()->comment('外部への転送フラグ');
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
        $table->dropColumn('send_flg');
      });
    }
}
