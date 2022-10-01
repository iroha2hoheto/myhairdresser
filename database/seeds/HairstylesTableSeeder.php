<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class HairstylesTableSeeder extends Seeder
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
                'name' => 'メンズショート',
                'category_id' => 2,
                'image' => 3,
                'menu' => 'cut',
                'staff_id' => 1,
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'メンズショート',
                'category_id' => 2,
                'image' => 4,
                'menu' => 'cut',
                'staff_id' => 1,
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
        ];
        foreach($params as $param) {
            DB::table('hairstyles') -> insert ($params);
        }
    }
}
