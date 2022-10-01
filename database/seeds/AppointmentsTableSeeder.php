<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AppointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appointments') -> insert ([   
                'date' => '9/17',
                'date2' => '9/23',
                'time' => '10:00',
                'time2' => '10:30',
                'time3' => '11:00',
                'comment' => 'cut&color',
                'shop_id' => 1,
                'staff_id' => 1,
        ]);
    }
}
