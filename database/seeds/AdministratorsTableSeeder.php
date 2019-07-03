<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdministratorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administrators')->insert([
            'user_id' => '14',
            'address' => "Eroilor 2",
            'schedule' => '12-15',
            'phone' => '0282882',
            'phoneF' => '021821',
            'firm_name' => 'firm srll',
            'emergency' => '1',
            'emergency_schedule' => '00-24',
        ]);
        DB::table('administrators')->insert([
            'user_id' => '15',
            'address' => "Eroilor 2",
            'schedule' => '12-15',
            'phone' => '0282882',
            'phoneF' => '021821',
            'firm_name' => 'firm srll',
            'emergency' => '1',
            'emergency_schedule' => '00-24',
        ]);
        DB::table('administrators')->insert([
            'user_id' => '16',
            'address' => "Eroilor 2",
            'schedule' => '12-15',
            'phone' => '0282882',
            'phoneF' => '021821',
            'firm_name' => 'firm srll',
            'emergency' => '1',
            'emergency_schedule' => '00-24',
        ]);
        DB::table('administrators')->insert([
            'user_id' => '17',
            'address' => "Eroilor 2",
            'schedule' => '12-15',
            'phone' => '0282882',
            'phoneF' => '021821',
            'firm_name' => 'firm srll',
            'emergency' => '1',
            'emergency_schedule' => '00-24',
        ]);
    }
}
