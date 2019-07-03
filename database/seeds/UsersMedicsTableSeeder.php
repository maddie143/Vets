<?php

use Illuminate\Database\Seeder;

class UsersMedicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_medics')->insert([
            'admin_id' => 1,
            'medic_id' => 1
        ]);
        DB::table('users_medics')->insert([
            'admin_id' => 1,
            'medic_id' => 2
        ]);
        DB::table('users_medics')->insert([
            'admin_id' => 2,
            'medic_id' => 3
        ]);
    }
}
