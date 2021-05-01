<?php

use Illuminate\Database\Seeder;
use App\State;
class CreateStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $state =
        [
            [
             'name'=>'Andaman and Nicobar Islands',

            ],
            [
               'name'=>'Andhra Pradesh',
                
            ],
         ];
         foreach ($state as $key => $value) {
            State::create($value);
        }
    }
}
