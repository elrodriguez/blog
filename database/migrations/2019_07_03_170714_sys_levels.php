<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SysLevels extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('sys_levels', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idlevel');
            $table->integer('idrole')->unsigned();
            $table->string('name');
            $table->boolean('state');
            $table->string('user_creates');
            $table->string('user_update');
            $table->timestamps();
            $table->foreign('idrole')->references('idrole')->on('sys_roles');
        }); //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('sys_levels');
    }

}
