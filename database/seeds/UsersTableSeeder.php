<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'profile_type' => 0,
            'name' => 'MadaBuc',
            'email' => 'mmm@aha.com',
            'county' => 'Bucuresti',
            'city' => 'Bucuresti',
            'username' => 'madder',
            'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
            'profile_type' => 0,
            'name' => 'MadaCluj1',
            'email' => 'mmsa@aha.com',
            'county' => 'Cluj',
            'city' => 'Cluj',
            'username' => 'madderr',
            'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
            'profile_type' => 0,
            'name' => 'MadaCluj2',
            'email' => 'mmss@aha.com',
            'county' => 'Cluj',
            'city' => 'Cluj',
            'username' => 'madderrre',
            'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
            'profile_type' => 0,
            'name' => 'MadaBuc2Craiova',
            'email' => 'mmaaa@aha.com',
            'county' => 'Bucuresti',
            'city' => 'Craiova',
            'username' => 'ee',
            'password' => bcrypt('secret'),
        ]);
    }
}
