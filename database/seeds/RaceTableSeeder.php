<?php

use Illuminate\Database\Seeder;

class RaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('races')->insert([
            'specie_id' => 1,
            'name' => 'Papion'
        ]);
        DB::table('races')->insert([
            'specie_id' => 1,
            'name' => 'Papion 2'
        ]);
        DB::table('races')->insert([
            'specie_id' => 2,
            'name' => 'Rottwailer Race 1'
        ]);
        DB::table('races')->insert([
            'specie_id' => 2,
            'name' => 'Rottwailer Race 2'
        ]);
    }
}
