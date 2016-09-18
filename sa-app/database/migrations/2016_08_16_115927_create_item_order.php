<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("items_order",function (Blueprint $table){
            $table->increments('id');
            $table->integer('qty');
            $table->decimal('amount', 16, 2);
            $table->decimal('discount', 16, 2);
            $table->decimal('total', 16, 2);
            $table->enum('order_status', ['Pending', 'Processing','Shipped','Delivered','Return']);
            $table->integer('order_id')->unsigned()->index();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
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
         Schema::drop('items_order');
    }
}
