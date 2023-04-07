<?php

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('schools')->truncate();

      DB::table('schools')->insert([
          [
              'id'                   => '1',
              'status'               => 'public',
              'main_image'           => '/uploads/shares/denenchofu/1_jpg.jpg',
              'sub_image'            => 'a:7:{i:0;s:36:"/uploads/shares/denenchofu/2_jpg.jpg";i:1;s:36:"/uploads/shares/denenchofu/3_jpg.jpg";i:2;s:36:"/uploads/shares/denenchofu/4_jpg.jpg";i:3;s:36:"/uploads/shares/denenchofu/5_jpg.jpg";i:4;s:36:"/uploads/shares/denenchofu/6_jpg.jpg";i:5;s:36:"/uploads/shares/denenchofu/7_jpg.jpg";i:6;s:36:"/uploads/shares/denenchofu/8_jpg.jpg";}',
              'school_name'           => '田園調布雪谷',
              'number'                => '03-6459-7186',
              'email'                 => 'd-yukigaya@kids-up.jp',
              'zip'                   => '1450071',
              'pref'                  => '東京都',
              'addr01'                => '大田区田園調布',
              'addr02'                => '1-5-2',
              'addr03'                => '大谷ビル',
              'lat'                   => '35.588092',
              'lng'                   => '139.675176',
              'keywords'              => 'a:3:{i:0;s:0:"";i:1;s:6:"KidsUP";i:2;s:18:"キッズアップ";}',
              'contents'              => '',
              'created_at'            => '2016-05-14 10:00:00',
              'updated_at'            => '2016-05-14 10:00:00',
              'published_at'          => '2016-05-14 10:00:00',
          ],
          [
              'id'                   => '2',
              'status'               => 'public',
              'main_image'           => '/uploads/shares/kamata/1_jpg.jpg',
              'sub_image'            => 'a:7:{i:0;s:32:"/uploads/shares/kamata/2_jpg.jpg";i:1;s:32:"/uploads/shares/kamata/3_jpg.jpg";i:2;s:32:"/uploads/shares/kamata/4_jpg.jpg";i:3;s:32:"/uploads/shares/kamata/5_jpg.jpg";i:4;s:32:"/uploads/shares/kamata/6_jpg.jpg";i:5;s:32:"/uploads/shares/kamata/7_jpg.jpg";i:6;s:32:"/uploads/shares/kamata/8_jpg.jpg";}',
              'school_name'           => '蒲田駅前',
              'number'                => '03-6428-7861',
              'email'                 => 'j-kamata@kids-up.jp',
              'zip'                   => '1440052',
              'pref'                  => '東京都',
              'addr01'                => '大田区蒲田',
              'addr02'                => '5-46-1',
              'addr03'                => '秋元ビル',
              'lat'                   => '35.560418',
              'lng'                   => '139.716013',
              'keywords'              => 'a:3:{i:0;s:0:"";i:1;s:6:"KidsUP";i:2;s:18:"キッズアップ";}',
              'contents'              => '',
              'created_at'            => '2016-06-04 10:00:00',
              'updated_at'            => '2016-06-04 10:00:00',
              'published_at'          => '2016-06-04 10:00:00',
          ],
          [
              'id'                   => '3',
              'status'               => 'public',
              'main_image'           => '/uploads/shares/ikegami/1_jpg.jpg',
              'sub_image'            => 'a:7:{i:0;s:33:"/uploads/shares/ikegami/2_jpg.jpg";i:1;s:33:"/uploads/shares/ikegami/3_jpg.jpg";i:2;s:33:"/uploads/shares/ikegami/4_jpg.jpg";i:3;s:33:"/uploads/shares/ikegami/5_jpg.jpg";i:4;s:33:"/uploads/shares/ikegami/6_jpg.jpg";i:5;s:33:"/uploads/shares/ikegami/7_jpg.jpg";i:6;s:33:"/uploads/shares/ikegami/8_jpg.jpg";}',
              'school_name'           => '池上',
              'number'                => '03-6410-9850',
              'email'                 => 'ikegami@kids-up.jp',
              'zip'                   => '1460082',
              'pref'                  => '東京都',
              'addr01'                => '大田区池上',
              'addr02'                => '3-32-17',
              'addr03'                => 'ツインウッドスクエアＣ館　2階',
              'lat'                   => '35.573683',
              'lng'                   => '139.701685',
              'keywords'              => 'a:3:{i:0;s:0:"";i:1;s:6:"KidsUP";i:2;s:18:"キッズアップ";}',
              'contents'              => '',
              'created_at'            => '2016-07-07 10:00:00',
              'updated_at'            => '2016-07-07 10:00:00',
              'published_at'          => '2016-07-07 10:00:00',
          ],
          [
              'id'                   => '4',
              'status'               => 'public',
              'main_image'           => '/uploads/shares/toyocho/1_jpg.jpg',
              'sub_image'            => 'a:7:{i:0;s:33:"/uploads/shares/toyocho/2_jpg.jpg";i:1;s:33:"/uploads/shares/toyocho/3_jpg.jpg";i:2;s:33:"/uploads/shares/toyocho/4_jpg.jpg";i:3;s:33:"/uploads/shares/toyocho/5_jpg.jpg";i:4;s:33:"/uploads/shares/toyocho/6_jpg.jpg";i:5;s:33:"/uploads/shares/toyocho/7_jpg.jpg";i:6;s:33:"/uploads/shares/toyocho/8_jpg.jpg";}',
              'school_name'           => '東陽町',
              'number'                => '03-6666-8144',
              'email'                 => 'toyocho@kids-up.jp',
              'zip'                   => '1360076',
              'pref'                  => '東京都',
              'addr01'                => '江東区南砂',
              'addr02'                => '2-25-7',
              'addr03'                => '',
              'lat'                   => '35.674948',
              'lng'                   => '139.824542',
              'keywords'              => 'a:3:{i:0;s:0:"";i:1;s:6:"KidsUP";i:2;s:18:"キッズアップ";}',
              'contents'              => '',
              'created_at'            => '2016-09-10 10:00:00',
              'updated_at'            => '2016-09-10 10:00:00',
              'published_at'          => '2016-09-10 10:00:00',
          ],
      ]);
    }
}
