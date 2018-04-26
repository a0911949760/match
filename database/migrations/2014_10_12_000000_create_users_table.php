<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('file');
            $table->string('gender');
            $table->string('identitycard');
            $table->string('birthday');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('address1');
            $table->string('address2');
            $table->string('address3');
            $table->string('license');
            $table->string('speciality');
            $table->string('experience');
            $table->string('selfintroduction');
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
        Schema::dropIfExists('users');
    }
}
