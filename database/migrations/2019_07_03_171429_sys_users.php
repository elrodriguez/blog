<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SysUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('iduser');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('remember');
            $table->boolean('state');
            $table->string('user_creates');
            $table->string('user_update');
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
        Schema::dropIfExists('sys_users');
    }
}
