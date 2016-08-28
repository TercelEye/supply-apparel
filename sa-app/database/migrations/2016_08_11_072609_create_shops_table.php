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
			$table->string('cover_image')->nullable();
			$table->string('social_fb')->nullable();
			$table->string('social_tw')->nullable();
			$table->boolean('status');
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries');

            $table->integer('boutique_type')->unsigned();
            $table->foreign('boutique_type')->references('id')->on('boutique_types');
            $table->integer('product_type')->unsigned();
            $table->foreign('product_type')->references('id')->on('product_types');

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
