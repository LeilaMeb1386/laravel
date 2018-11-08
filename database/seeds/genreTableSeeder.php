<?php

use Illuminate\Database\Seeder;

class genreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('genres')->insert([
        [
          "name"=> "fantasy",
        ],
        [
          "name"=> "love story",
        ],
        [
          "name"=> "science fiction",
        ],
        [
          "name"=> "hard science",
        ],
      ]);


    }
}
