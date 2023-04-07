<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableReservationMeta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('reservation_meta', function (Blueprint $table) {
        $table->integer('id');
        $table->string('hash_id');
        $table->string('gender')->nullable()->comment('性別');
        $table->string('english')->nullable()->comment('英語経験');
        $table->string('english_detail')->nullable()->comment('英語経験_詳細');
        $table->string('attendance')->nullable()->comment('就学状況');
        $table->string('attendance_detail')->nullable()->comment('就学先');
        $table->string('start')->nullable()->comment('開始希望');
        $table->string('route')->nullable()->comment('媒体');
        $table->string('participat_count')->nullable()->comment('参加人数');
        $table->string('participat_detail')->nullable()->comment('参加者');
        $table->string('other')->nullable()->comment('');
        $table->string('send_flg')->nullable()->comment('外部への転送フラグ');
        $table->timestamps();
      });

      Schema::table('reservation', function (Blueprint $table) {
          $table->string('hash_id')->nullable()->comment('カウンターメールキー');
          $table->index('hash_id');
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('reservation_meta');

      Schema::table('reservation', function (Blueprint $table) {
        $table->dropColumn('hash_id');
      });
    }
}
