<?php

use Illuminate\Database\Seeder;

class MedicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('medics')->insert([
            'name' => 'Medic 1'
        ]);
        DB::table('medics')->insert([
            'name' => 'Medic 2'
        ]);
        DB::table('medics')->insert([
            'name' => 'Medic 3'
        ]);
        DB::table('medics')->insert([
            'name' => 'Medic 4'
        ]);
    }
}
