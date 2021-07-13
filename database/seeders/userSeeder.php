<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'name' => 'admin',
            'email' => 'admin@test.com',
            'username' => 'admin',
            'password' => md5('admin'),
            'gender' => 'L',
            'province' => 'Jawa Timur',
            'city' => 'Jember',
            'district' => 'Sumbersari',
            'village' => 'Sumbersari',
            'address' => 'Jl. Mastrip No.164, Krajan Timur',
            'postal_code' => '68121',
            'whatsapp' => '088888888888',
            'role' => '1'
        ]);
        DB::table('user')->insert([
            'name' => 'user',
            'email' => 'user@test.com',
            'username' => 'user',
            'password' => md5('user'),
            'gender' => 'L',
            'province' => 'Jawa Timur',
            'city' => 'Lumajang',
            'district' => 'Lumajang',
            'village' => 'Tompokersan',
            'address' => 'Jalan Brigjen. Katamso',
            'postal_code' => '67316',
            'whatsapp' => '088888888888',
            'role' => '0'
        ]);
    }
}
