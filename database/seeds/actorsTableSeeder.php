<?php

use Illuminate\Database\Seeder;

class actorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('actors')->insert([
        [
          "firstname"=> "andrew",
          "lastname"=> "lincol",
        ],
        [
          "firstname"=> "Gina",
          "lastname"=> "Rodriguez",
        ],
        [
          "firstname"=> "Kit",
          "lastname"=> "Harington",
        ],
        [
          "firstname"=> "Emilia",
          "lastname"=> "Clarke",
        ],
        [
        "firstname"=> "Pedro",
        "lastname"=> "Alonso",
      ],
      ]);
    }
}
