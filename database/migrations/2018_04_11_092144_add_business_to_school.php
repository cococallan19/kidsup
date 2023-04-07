<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBusinessToSchool extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('schools', function (Blueprint $table) {
          //#134 ②投稿に表示期限をつける　例）ハロウィンは11/1から非表示になる
          $table->string('business_start')->nullable()->default('10:00');
          $table->string('business_end')->nullable()->default('20:00');;
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('schools', function (Blueprint $table) {
        $table->dropColumn('business_start');
        $table->dropColumn('business_start');
      });
    }
}
