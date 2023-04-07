<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCulumnToNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('news', function (Blueprint $table) {
          //#192 TOP画のみ変え、お知らせ扱いしない投稿の作成
          $table->string('top_only')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('news', function (Blueprint $table) {
        $table->dropColumn('top_only');
      });
    }
}
