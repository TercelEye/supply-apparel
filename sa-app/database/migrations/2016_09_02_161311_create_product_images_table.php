<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('product_id')->unsigned()->index();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('product_colour_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_image_id')->unsigned()->index();
            $table->foreign('product_image_id')->references('id')->on('product_images')->onDelete('cascade');
            $table->integer('colour_id')->unsigned()->index();
            $table->foreign('colour_id')->references('id')->on('colours')->onDelete('cascade');
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
        Schema::drop('product_colour_images');
        Schema::drop('product_images');
    }
}
