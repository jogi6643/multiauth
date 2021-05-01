<?php

use Illuminate\Database\Seeder;
use App\City;
class CreateCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $citie = [
            [
                'name'=>'Bombuflat',
                'state_id'=>1,
            ],
            [
                'name'=>'Garacharma',
                'state_id'=>1,
            ],
            [
                
                'name'=>'Port Blair',
                'state_id'=>1,
            ],
            [
                'name'=>'Rangat',
                'state_id'=>1,
            ],
            [
                'name'=>'Addanki',
                'state_id'=>2,
            ],
            [
                'name'=>'Adivivaram',
                'state_id'=>2,
            ],
            [
                'name'=>'Adoni',
                'state_id'=>2,
            ],
            [
                'name'=>'Aganampudi',
                'state_id'=>2,
            ],

            
        ];
        foreach($citie as $key=> $value)
        {
            City::create($value);
        }
    }
}
