<?php

use Illuminate\Database\Seeder;

class SpecieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('species')->insert([
            'name' => 'Pechinez',
        ]);
        DB::table('species')->insert([
            'name' => 'Rotwailler',
        ]);

    }
}
