<?php

use Illuminate\Database\Seeder;
use App\Post;

class CreatePostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $posts = [
        [
            'name'=>'Php Developer',
            'description'=>'Learning Php',
        ],
        [
            'name'=>'Node Js Developer',
            'description'=>'Learning Node  js',
        ],
        [
            'name'=>'Mongo DB Developer',
            'description'=>'Learning Mongo',
        ],
       ];
       foreach($posts as $value)
       {
           Post::create($value);
       }
    }
}
