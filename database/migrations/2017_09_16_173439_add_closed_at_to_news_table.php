<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddClosedAtToNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('news', function (Blueprint $table) {
          //#134 ②投稿に表示期限をつける　例）ハロウィンは11/1から非表示になる
          $table->timestamp('closed_at')->nullable()->default('2037-12-31 23:59:59');
          $table->text('sub_image')->nullable();
          $table->text('mobile_image')->nullable();
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
        $table->dropColumn('closed_at');
        $table->dropColumn('sub_image');
        $table->dropColumn('mobile_image');
      });
    }
}
