<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->truncate();

      DB::table('categories')->insert([
          [
              'category_id'          => '1',
              'name'                 => 'お知らせ',
              'slag'                => 'info',
          ],
          [
              'category_id'          => '2',
              'name'                 => 'イベント',
              'slag'                => 'event',
          ],
          [
              'category_id'          => '3',
              'name'                 => '短期講習',
              'slag'                => 'season',
          ],
      ]);
    }
}
