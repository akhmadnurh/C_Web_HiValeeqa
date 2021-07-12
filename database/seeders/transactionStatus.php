<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class transactionStatus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_status')->insert([
            'status_id' => 1,
            'status' => 'Menunggu pembayaran'
        ]);

        DB::table('transaction_status')->insert([
            'status_id' => 2,
            'status' => 'Menunggu pengiriman'
        ]);

        DB::table('transaction_status')->insert([
            'status_id' => 3,
            'status' => 'Proses pengiriman'
        ]);

        DB::table('transaction_status')->insert([
            'status_id' => 4,
            'status' => 'Selesai'
        ]);

        DB::table('transaction_status')->insert([
            'status_id' => 5,
            'status' => 'Dibatalkan'
        ]);
    }
}
