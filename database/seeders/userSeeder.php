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
           'address' => 'Mojokerto',
           'whatsapp' => '088888888888',
           'role' => '1'
       ]);
        DB::table('user')->insert([
            'name' => 'user',
            'email' => 'user@test.com',
            'username' => 'user',
            'password' => md5('user'),
            'gender' => 'L',
            'address' => 'Mojokerto',
            'whatsapp' => '088888888888',
            'role' => '0'
        ]);
    }
}
