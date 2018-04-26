<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserscaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userscares', function (Blueprint $table) {
            $table->increments('id');           
            $table->string('name');
            $table->string('city');
            $table->string('region');
            $table->string('zipcode');
            $table->string('birthday');
            $table->string('phone');
            $table->string('file');
            $table->boolean('高血壓')->nullable();
            $table->boolean('中風')->nullable();
            $table->boolean('植物人')->nullable();
            $table->boolean('失智')->nullable();
            $table->boolean('自閉症')->nullable();
            $table->boolean('智能障礙')->nullable();
            $table->boolean('精神病')->nullable();
            $table->string('experience');
            $table->string('identitycard');
            $table->string('email');
            $table->string('password');
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
        Schema::dropIfExists('userscares');
    }
}
