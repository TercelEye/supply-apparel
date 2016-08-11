<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('role_id');
            $table->string('role');
            $table->string('description');
            $table->timestamps();
        });
		
		
		Schema::create('user_roles', function (Blueprint $table) {
			$table->increments('user_role_id');
            $table->integer('role_id')->unsigned();;
            $table->integer('user_id')->unsigned();;
			$table->foreign('role_id')->references('role_id')->on('roles');
			$table->foreign('user_id')->references('id')->on('users');
        });
		
		
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {	
		Schema::dropIfExists('user_roles');
        Schema::dropIfExists('roles');
        
    }
}
