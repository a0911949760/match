<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserscareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userscare', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('twzipcode');
            $table->string('birthday');
            $table->string('phone');
            $table->string('speciality');
            $table->string('experience');
            $table->string('identitycard');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userscare');
    }
}