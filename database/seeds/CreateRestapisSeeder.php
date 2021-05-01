<?php

use Illuminate\Database\Seeder;
use App\RestApis;
class CreateRestapisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rest =
        [
            [

                'name'=>'RestApi-Admin',
                'byname'=>'Admin',
             
            ],
            [
                'name'=>'RestApi-User',
                'byname'=>'User',
            ],
        ];
        foreach ($rest as $key => $value) {
         RestApis::create($value);
        }
    }
}
