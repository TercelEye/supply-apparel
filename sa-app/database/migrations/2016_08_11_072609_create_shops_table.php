<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('owner_id')->unsigned();
    		$table->foreign('owner_id')->references('id')->on('users');
			$table->string('shop_name');
			$table->string('shop_slug')->unique();
			$table->text('description');
			$table->string('cover_image');
			$table->string('social_fb');
			$table->string('social_tw');
			$table->string('followers_count');
			$table->string('brand_type');
			$table->string('gender_type');
			$table->string('country');
			$table->boolean('status');
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
        Schema::drop('shops');
    }
}
