<?php

use Illuminate\Database\Seeder;

class UsersServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_services')->insert([
            'admin_id' => 1,
            'service_id' => 1,
            'price' => 20
        ]);
        DB::table('users_services')->insert([
            'admin_id' => 1,
            'service_id' => 1,
            'price' => 20
        ]);
        DB::table('users_services')->insert([
            'admin_id' => 1,
            'service_id' => 1,
            'price' => 20
        ]);
    }
}
