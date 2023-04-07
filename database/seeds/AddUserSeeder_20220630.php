<?php

use Illuminate\Database\Seeder;

class AddUserSeeder_20220630 extends Seeder
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

          //ユーザー追加
          DB::table('users')->insert([
            [
                'id'                   => '24',
                'name'                 => 'fujimura shogo',
                'email'                => 's-fujimura@p-up.jp',
                'password'             => bcrypt('fuimura0099'),
                // 'remember_token'       => 'UBaiz3CnZZHfgaAsJF7U7KSPa6reof1nZ8K4oHWbcb7bRiNxmF3Gfpx0J5qJ',
                'created_at'           => '2022-06-30 00:00:00',
                'updated_at'           => '2022-06-30 00:00:00',
            ],
          ]);

      }

}
