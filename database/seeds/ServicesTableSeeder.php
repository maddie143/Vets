<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name' => 'Service 1'
        ]);
        DB::table('services')->insert([
            'name' => 'Service 2'
        ]);
        DB::table('services')->insert([
            'name' => 'Service 3'
        ]);
        DB::table('services')->insert([
            'name' => 'Service 4'
        ]);
        DB::table('services')->insert([
            'name' => 'Service 5'
        ]);
    }
}
