<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('city')->insert([
           'county_id' => 1,
           'name' => 'Turda'
        ]);
        DB::table('city')->insert([
           'county_id' => 1,
           'name' => 'Cluj Napoca'
        ]);
        DB::table('city')->insert([
           'county_id' => 2,
           'name' => 'Campina'
        ]);
        DB::table('city')->insert([
           'county_id' => 5,
           'name' => 'Alba'
        ]);
    }
}
