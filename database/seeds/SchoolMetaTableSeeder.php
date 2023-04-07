<?php

use Illuminate\Database\Seeder;

class SchoolMetaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('school_meta')->truncate();

        DB::table('school_meta')->insert([
            [
                'meta_id'               => '1',
                'school_id'             => '1',
                'meta_key'              => 'access',
                'meta_value'            => '東急池上線 雪が谷大塚駅より徒歩8分',
            ],
            [
                'meta_id'               => '2',
                'school_id'             => '1',
                'meta_key'              => 'trafic',
                'meta_value'            => '',
            ],
            [
                'meta_id'               => '3',
                'school_id'             => '1',
                'meta_key'              => 'area',
                'meta_value'            => '<p><strong>◆主な小学校</strong><br />松仙・洗足池・池雪・調布大塚・田園調布・東玉川・東調布第一・嶺町・雪谷<br /><strong>◆主な保育園</strong><br />田園調布保育園・田園調布２丁目保育園</p>',
            ],
            [
                'meta_id'               => '4',
                'school_id'             => '2',
                'meta_key'              => 'access',
                'meta_value'            => '京浜東北線 蒲田より徒歩３分',
            ],
            [
                'meta_id'               => '5',
                'school_id'             => '2',
                'meta_key'              => 'trafic',
                'meta_value'            => '',
            ],
            [
                'meta_id'               => '6',
                'school_id'             => '2',
                'meta_key'              => 'area',
                'meta_value'            => '<p><strong>◆主な小学校</strong><br />相生・出雲・蒲田・糀谷・志茂田・新宿・高畑・東蒲・仲六郷・南蒲・西六郷・東六郷・道塚・南六郷・矢口東・六郷<br /><strong>◆主な保育園</strong><br />蒲田本町保育園・ナーサリールームベリーベアー蒲田</p>',
            ],
            [
                'meta_id'               => '7',
                'school_id'             => '3',
                'meta_key'              => 'access',
                'meta_value'            => '東急池上線 池上より徒歩５分',
            ],
            [
                'meta_id'               => '8',
                'school_id'             => '3',
                'meta_key'              => 'trafic',
                'meta_value'            => '',
            ],
            [
                'meta_id'               => '9',
                'school_id'             => '3',
                'meta_key'              => 'area',
                'meta_value'            => '<p><strong>◆主な小学校</strong><br />池上・池上第二・入新井第二・入新井第四・梅田・おなづか・久原・多摩川・千鳥・徳持・東調布第三・矢口・矢口西<br /><strong>◆主な保育園</strong><br />アスク久が原保育園・あっぷる池上保育園・ベネッセ池上保育園</p>',
            ],
            [
                'meta_id'               => '10',
                'school_id'             => '4',
                'meta_key'              => 'access',
                'meta_value'            => '東京メトロ東西線 東陽町駅より徒歩１５分',
            ],
            [
                'meta_id'               => '11',
                'school_id'             => '4',
                'meta_key'              => 'trafic',
                'meta_value'            => '',
            ],
            [
                'meta_id'               => '12',
                'school_id'             => '4',
                'meta_key'              => 'area',
                'meta_value'            => '<p><strong>◆主な小学校</strong><br />平久小・南陽小・東陽小・南砂小・第三砂町小・砂町小・小名木川小・亀高小・北砂小・川南小・扇橋小</p>',
            ],

        ]);
    }
}
