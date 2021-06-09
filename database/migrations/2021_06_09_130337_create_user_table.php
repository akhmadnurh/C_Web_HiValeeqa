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
            $table->increments('id_user');
            $table->string('email', 50);
            $table->string('nama', 50);
            $table->string('gender', 50);
            $table->text('alamat');
            $table->string('nomor_wa', 15);
            $table->tinyInteger('role');
            $table->string('lupa_password', 5);
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
