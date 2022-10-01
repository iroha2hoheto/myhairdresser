<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StaffsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staffs') -> insert ([
            'staff_name' => '嵯峨　ひふみ',
            'shop_id' => 1,
            'staff_sex' => 3,
            'area_id' => 1,
            'email' => 'luan@gmail.com',
        ]);
    }
}
