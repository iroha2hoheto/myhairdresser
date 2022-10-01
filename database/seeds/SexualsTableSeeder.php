<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SexualsTableSeeder extends Seeder
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
                'id' => 1,
                'sexual' => 'メンズ',
            ],
            [   
                'id' => 2,
                'sexual' => 'レディース',
            ],
            [   
                'id' => 3,
                'sexual' => 'ユニセックス',
            ],
        ];
        foreach($params as $param) {
            DB::table('sexuals') -> insert ($params);
        }
    }
}
