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
            'user_id' => '1',
            'address' => "Eroilor 2",
            'schedule' => '12-15',
            'phone' => '0282882',
            'phoneF' => '021821',
            'firm_name' => 'firm srll',
            'emergency' => '1',
            'emergency_schedule' => '00-24',
        ]);
        DB::table('administrators')->insert([
            'user_id' => '2',
            'address' => "Eroilor 2",
            'schedule' => '12-15',
            'phone' => '0282882',
            'phoneF' => '021821',
            'firm_name' => 'firm srll',
            'emergency' => '1',
            'emergency_schedule' => '00-24',
        ]);
        DB::table('administrators')->insert([
            'user_id' => '3',
            'address' => "Eroilor 2",
            'schedule' => '12-15',
            'phone' => '0282882',
            'phoneF' => '021821',
            'firm_name' => 'firm srll',
            'emergency' => '1',
            'emergency_schedule' => '00-24',
        ]);
        DB::table('administrators')->insert([
            'user_id' => '4',
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
