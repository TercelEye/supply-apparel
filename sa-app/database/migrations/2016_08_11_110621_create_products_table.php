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
			$table->integer('category_id')->unsigned();
			$table->string('title');
			$table->text('description')->nullable();
            $table->decimal('price', 16, 2);
			$table->decimal('price_discounts', 16, 2)->nullable();
            $table->boolean('is_sale')->nullable();
            $table->decimal('shipping_local_price',16, 2)->default(0);
            $table->integer('shipping_local_duration')->nullable();
            $table->boolean('shipping_int_disabled')->default(0);
            $table->integer('shipping_int_duration')->nullable();
            $table->integer('shipping_int_price')->nullable();
            $table->string('logistic_provider')->nullable();
            $table->integer('product_type_id')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands');
			$table->foreign('product_type_id')->references('id')->on('product_types');
            $table->foreign('shop_id')->references('id')->on('shops');
            $table->foreign('category_id')->references('id')->on('categories');
			$table->boolean('is_active')->default(0);

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
