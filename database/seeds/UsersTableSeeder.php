<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

      public function run()
      {
          DB::table('users')->truncate();

          DB::table('users')->insert([
              [
                  'id'                   => '1',
                  'name'                 => '林',
                  'email'                => 'r-hayashi@p-up.jp',
                  'password'             => '$2y$10$Xuagcj9G1hkB32A0WU3FSu9eSUBAcvpzhnxrZ6vlz./buKp53bVeW',
                  // 'remember_token'       => 'UBaiz3CnZZHfgaAsJF7U7KSPa6reof1nZ8K4oHWbcb7bRiNxmF3Gfpx0J5qJ',
                  'created_at'           => '2016-04-12 18:48:13',
                  'updated_at'           => '2016-04-12 18:48:13',
              ],
              [
                  'id'                   => '2',
                  'name'                 => '藤村',
                  'email'                => 's-fujimura@p-up.jp',
                  'password'             => bcrypt('Z6L6RyELPLiWavuQ'),
                  // 'remember_token'       => 'UBaiz3CnZZHfgaAsJF7U7KSPa6reof1nZ8K4oHWbcb7bRiNxmF3Gfpx0J5qJ',
                  'created_at'           => '2016-11-12 10:00:00',
                  'updated_at'           => '2016-11-12 10:00:00',
              ],
              [
                  'id'                   => '3',
                  'name'                 => '横尾',
                  'email'                => 'f-yokoo@p-up.jp',
                  'password'             => bcrypt('86gNqHtCJvwTQwPY'),
                  // 'remember_token'       => 'UBaiz3CnZZHfgaAsJF7U7KSPa6reof1nZ8K4oHWbcb7bRiNxmF3Gfpx0J5qJ',
                  'created_at'           => '2016-11-12 10:00:00',
                  'updated_at'           => '2016-11-12 10:00:00',
              ],

              [
                  'id'                   => '4',
                  'name'                 => 'kakuishi',
                  'email'                => 'info@asami.tokyo',
                  'password'             => bcrypt('X8YvSceu'),
                  // 'remember_token'       => 'UBaiz3CnZZHfgaAsJF7U7KSPa6reof1nZ8K4oHWbcb7bRiNxmF3Gfpx0J5qJ',
                  'created_at'           => '2016-11-12 10:00:00',
                  'updated_at'           => '2016-11-12 10:00:00',
              ],
              [
                  'id'                   => '5',
                  'name'                 => 'yamashita',
                  'email'                => 'h-yamashita@p-up.jp',
                  'password'             => bcrypt('X8YvSceu'),
                  // 'remember_token'       => 'UBaiz3CnZZHfgaAsJF7U7KSPa6reof1nZ8K4oHWbcb7bRiNxmF3Gfpx0J5qJ',
                  'created_at'           => '2017-03-07 10:00:00',
                  'updated_at'           => '2017-03-07 10:00:00',
              ],
              [
                  'id'                   => '6',
                  'name'                 => 'mizukoshi',
                  'email'                => 'm-mizukoshi@kids-up.jp',
                  'password'             => bcrypt('ZqLd3vD3RDmPFmAL'),
                  // 'remember_token'       => 'UBaiz3CnZZHfgaAsJF7U7KSPa6reof1nZ8K4oHWbcb7bRiNxmF3Gfpx0J5qJ',
                  'created_at'           => '2017-05-01 10:00:00',
                  'updated_at'           => '2017-05-01 10:00:00',
              ],

          ]);

      }

}
