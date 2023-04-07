<?php

use Illuminate\Database\Seeder;

class AddUserSeeder extends Seeder
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
                'id'                   => '22',
                'name'                 => '飯森絵里香',
                'email'                => 'e-iimori@kids-up.jp',
                'password'             => bcrypt('ydey5BSiUayyqQ4t'),
                // 'remember_token'       => 'UBaiz3CnZZHfgaAsJF7U7KSPa6reof1nZ8K4oHWbcb7bRiNxmF3Gfpx0J5qJ',
                'created_at'           => '2022-05-24 00:00:00',
                'updated_at'           => '2022-05-24 00:00:00',
            ],
            [
                'id'                   => '23',
                'name'                 => '芥川知紗',
                'email'                => 'c-akutagawa@kids-up.jp',
                'password'             => bcrypt('Kj4qZRpQ'),
                // 'remember_token'       => 'UBaiz3CnZZHfgaAsJF7U7KSPa6reof1nZ8K4oHWbcb7bRiNxmF3Gfpx0J5qJ',
                'created_at'           => '2022-05-24 00:00:00',
                'updated_at'           => '2022-05-24 00:00:00',
            ],
          ]);

      }

}
