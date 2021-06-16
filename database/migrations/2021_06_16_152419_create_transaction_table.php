<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->increments('transaction_id');
            $table->integer('user_id');
            $table->tinyInteger('payment_method');
            $table->tinyInteger('shipping_method');
            $table->date('transaction_date');
            $table->integer('saving');
            $table->integer('total');
            $table->tinyInteger('status');
            $table->string('receipt_number', 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}
