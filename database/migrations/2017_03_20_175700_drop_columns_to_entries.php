<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnsToEntries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //2017_03_15_133738_add_columns_to_entries で追加したカラムを削除する
        Schema::table('entries', function (Blueprint $table) {
          $table->dropColumn('event_id');
          $table->dropColumn('school');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //ダミー
    }
}
