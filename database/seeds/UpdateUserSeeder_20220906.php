<?php

use Illuminate\Database\Seeder;

class UpdateUserSeeder_20220906 extends Seeder
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
            ->where('id', 11)
            ->update([
                'password'             => bcrypt('T2c4qfjn'),
                'updated_at'           => '2022-09-06 11:30:00',
          ]);
      }

}
