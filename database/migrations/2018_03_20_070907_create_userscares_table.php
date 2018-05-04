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
            $table->string('file');
            $table->string('gender');
            $table->string('identitycard');
            $table->string('birthday');
            $table->string('phone');
            $table->string('email');
            $table->string('city');
            $table->string('region');
            $table->string('zipcode');
            $table->string('行動不便')->nullable();
            $table->string('中風')->nullable();
            $table->string('植物人')->nullable();
            $table->string('失智')->nullable();
            $table->string('自閉症')->nullable();
            $table->string('智能障礙')->nullable();
            $table->string('精神病')->nullable();
            $table->string('experience');
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
