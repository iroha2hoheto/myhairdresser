<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops') -> insert ([
            'shop_name' => 'hair&make Luana',
            'area_id' => 7,
            'address' => '東京都渋谷区恵比寿西1-34-21-クレスト代官山105',
            'telphone' => '03-3461-3305',
            'email' => 'luana@gmail.com',
        ]);
    }
}
