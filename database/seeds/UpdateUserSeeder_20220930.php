<?php

use Illuminate\Database\Seeder;

class UpdateUserSeeder_20220930 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
      public function run()
      {
          //ユーザー削除
          //DB::table('users')->truncate();

          //ユーザー情報更新
          DB::table('users')
            ->where('id', 19)
            ->update([
                'password'             => bcrypt('D8x4dbAQ'),
                'updated_at'           => '2022-09-30 19:00:00',
          ]);
      }

}
