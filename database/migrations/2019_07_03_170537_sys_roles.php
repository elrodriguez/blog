<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SysRoles extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('sys_roles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idrole');
            $table->string('name');
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
    public function down() {
        Schema::dropIfExists('sys_roles');
    }

}
