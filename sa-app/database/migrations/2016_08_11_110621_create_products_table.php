<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('shop_id')->unsigned();
    		$table->foreign('shop_id')->references('id')->on('shops');
			$table->integer('category_id')->unsigned();
    		$table->foreign('category_id')->references('id')->on('categories');
			$table->string('title');
			$table->text('description');
			$table->decimal('price', 16, 2);
			$table->enum('gender_type', ['men', 'women','kid-boy','kid-girl']);	
			
			
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
        Schema::drop('products');
    }
}
