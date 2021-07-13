<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Shipping extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shipping')->insert([
            'shipping_id' => 1,
            'shipping' => 'COD'
        ]);

        DB::table('shipping')->insert([
            'shipping_id' => 2,
            'shipping' => 'Courier'
        ]);
    }
}
