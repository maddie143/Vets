<?php

use Illuminate\Database\Seeder;

class CountyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('county')->insert([
            'name' => 'Cluj'
        ]);
        DB::table('county')->insert([
            'name' => 'Prahova'
        ]);
        DB::table('county')->insert([
            'name' => 'Mures'
        ]);
        DB::table('county')->insert([
            'name' => 'Ilfov'
        ]);
        DB::table('county')->insert([
            'name' => 'Alba'
        ]);
    }
}
