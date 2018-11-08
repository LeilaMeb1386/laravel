<?php

use Illuminate\Database\Seeder;

class seriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('series')->insert([[
          'title' => "the walking dead",
          'publication_year' => 2011,],[
            'title' => "how i met your mother",
            'publication_year' => 2009,

          ]

      ]);
    }
}
