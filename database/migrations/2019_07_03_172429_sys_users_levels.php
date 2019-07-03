<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SysUsersLevels extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('sys_users_levels', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('iduserslevels');
            $table->integer('idlevel')->unsigned();
            $table->bigInteger('iduser')->unsigned();
            $table->string('state');
            $table->string('user_creates');
            $table->string('user_update');
            $table->timestamps();
            $table->foreign('idlevel')->references('idlevel')->on('sys_levels');
            $table->foreign('iduser')->references('iduser')->on('sys_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('sys_users_levels');
    }

}
