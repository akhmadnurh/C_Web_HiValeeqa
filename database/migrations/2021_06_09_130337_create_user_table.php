<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('name', 50);
            $table->string('email', 50);
            $table->string('username', 50);
            $table->string('password', 50);
            $table->string('gender', 1);
            $table->string('province', 30);
            $table->string('city', 30);
            $table->string('district', 30);
            $table->string('village', 30);
            $table->string('postal_code', 5);
            $table->text('address');
            $table->string('whatsapp', 15);
            $table->tinyInteger('role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
