<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            [   
                'area' => '北海道',
                'exact' => '北海道',
            ],
            [
                'area' => '東北',
                'exact' => '青森',
            ],
            [
                'area' => '東北',
                'exact' => '秋田',
            ],
            [
                'area' => '東北',
                'exact' => '山形',
            ],
            [
                'area' => '東北',
                'exact' => '宮城',
            ],
            [
                'area' => '東北',
                'exact' => '福島',
            ],
            [
                'area' => '関東',
                'exact' => '東京',
            ],
            [
                'area' => '関東',
                'exact' => '埼玉',
            ],
            [
                'area' => '関東',
                'exact' => '神奈川',
            ],
            [
                'area' => '関東',
                'exact' => '千葉',
            ],
            [
                'area' => '関東',
                'exact' => '茨城',
            ],
            [
                'area' => '関東',
                'exact' => '栃木',
            ],
            [
                'area' => '関東',
                'exact' => '群馬',
            ],
            [
                'area' => '中部',
                'exact' => '新潟',
            ],
            [
                'area' => '中部',
                'exact' => '長野',
            ],
            [
                'area' => '中部',
                'exact' => '山梨',
            ],
            [
                'area' => '中部',
                'exact' => '静岡',
            ],
            [
                'area' => '中部',
                'exact' => '富山',
            ],
            [
                'area' => '中部',
                'exact' => '石川',
            ],
            [
                'area' => '中部',
                'exact' => '岐阜',
            ],
            [
                'area' => '中部',
                'exact' => '福井',
            ],
            [
                'area' => '中部',
                'exact' => '愛知',
            ],
            [
                'area' => '近畿',
                'exact' => '滋賀',
            ],
            [
                'area' => '近畿',
                'exact' => '三重',
            ],
            [
                'area' => '近畿',
                'exact' => '京都',
            ],
            [
                'area' => '近畿',
                'exact' => '奈良',
            ],
            [
                'area' => '近畿',
                'exact' => '大阪',
            ],
            [
                'area' => '近畿',
                'exact' => '兵庫',
            ],
            [
                'area' => '近畿',
                'exact' => '和歌山',
            ],
            [
                'area' => '中国',
                'exact' => '鳥取',
            ],
            [
                'area' => '中国',
                'exact' => '岡山',
            ],
            [
                'area' => '中国',
                'exact' => '島根',
            ],
            [
                'area' => '中国',
                'exact' => '広島',
            ],
            [
                'area' => '中国',
                'exact' => '山口',
            ],
            [
                'area' => '四国',
                'exact' => '香川',
            ],
            [
                'area' => '四国',
                'exact' => '徳島',
            ],
            [
                'area' => '四国',
                'exact' => '愛媛',
            ],
            [
                'area' => '四国',
                'exact' => '高知',
            ],
            [
                'area' => '九州',
                'exact' => '大分',
            ],
            [
                'area' => '九州',
                'exact' => '福岡',
            ],
            [
                'area' => '九州',
                'exact' => '熊本',
            ],
            [
                'area' => '九州',
                'exact' => '宮崎',
            ],
            [
                'area' => '九州',
                'exact' => '佐賀',
            ],
            [
                'area' => '九州',
                'exact' => '長崎',
            ],
            [
                'area' => '九州',
                'exact' => '鹿児島',
            ],
            [
                'area' => '沖縄',
                'exact' => '鹿児島',
            ],
        ];

        foreach($params as $param) {
            DB::table('areas') -> insert ($params);
        }
    }
}
