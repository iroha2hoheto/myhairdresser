<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class HairscategorysTableSeeder extends Seeder
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
                'length' => 'ショート',
            ],
            [   
                'id' => 2,
                'length' => 'ミディアム',
            ],
            [   
                'id' => 3,
                'length' => 'ロング',
            ],
            [   
                'id' => 4,
                'length' => 'ショート',
            ],
            [   
                'id' => 5,
                'length' => 'ミディアム',
            ],
            [   
                'id' => 6,
                'length' => 'ロング',
            ],
            [   
                'id' => 7,
                'length' => 'ユニセックス',
            ],
        ];
        foreach($params as $param) {
            DB::table('haircategorys') -> insert ($params);
        }
    }
}
