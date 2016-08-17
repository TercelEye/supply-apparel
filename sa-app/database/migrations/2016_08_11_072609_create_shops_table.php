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
			$table->string('cover_image')->nullable();;
			$table->string('social_fb')->nullable();;
			$table->string('social_tw')->nullable();;
			$table->string('followers_count')->nullable();;
			$table->string('brand_type')->nullable();;
			$table->string('gender_type')->nullable();;
			$table->string('country')->nullable();;
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
