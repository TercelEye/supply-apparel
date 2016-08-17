<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProdcutSize extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_size', function (Blueprint $table) {
			$table->integer('size_id')->unsigned()->index();
    		$table->foreign('size_id')->references('id')->on('sizes')->onDelete('cascade');
			
			$table->integer('product_id')->unsigned()->index();
    		$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
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
        Schema::drop('product_size');
    }
}
