<?php

use Illuminate\Database\Seeder;

class AnimalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert([
           'client_id' => 1,
            'name' => 'Animal 1',
            'date_of_birth' => new DateTime('2017-04-04'),
            'gender' => 'female',
            'specie_id' => 1,
            'race_id' => 1,
            'color' => 'brown',
            'particular_signs' => 'none',
            'identification_code' => '872hhjeh'
        ]);
        DB::table('animals')->insert([
           'client_id' => 2,
            'name' => 'Animal 2',
            'date_of_birth' => new DateTime('2017-04-04'),
            'gender' => 'female',
            'specie_id' => 1,
            'race_id' => 1,
            'color' => 'brown',
            'particular_signs' => 'none',
            'identification_code' => '872hhjeh'
        ]);
        DB::table('animals')->insert([
           'client_id' => 2,
            'name' => 'Animal 3',
            'date_of_birth' => new DateTime('2017-04-04'),
            'gender' => 'female',
            'specie_id' => 1,
            'race_id' => 1,
            'color' => 'brown',
            'particular_signs' => 'none',
            'identification_code' => '872hhjeh'
        ]);
    }
}
