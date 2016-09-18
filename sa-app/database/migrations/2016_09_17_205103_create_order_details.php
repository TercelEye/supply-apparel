<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('shipping_address')->nullable();
            $table->string('shipping_price_total')->nullable();
            $table->string('transaction_id')->nullable();
        });
        Schema::table('items_order', function (Blueprint $table) {
            $table->integer('size')->nullable();
            $table->integer('colour')->nullable();
            $table->date('shipping_date')->nullable();
            $table->string('tracking_no')->nullable();
            $table->string('logistic_provider')->nullable();
            $table->decimal('shipping_price', 16, 2)->nullable();
            $table->string('commission_percentage')->nullable();
            $table->decimal('commission', 16, 2)->nullable();
            $table->decimal('tax', 16, 2)->nullable();
            $table->boolean('refunded')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn(['shipping_address', 'shipping_price_total', 'transaction_id']);
        });
        Schema::table('items_order', function (Blueprint $table) {
            $table->dropColumn([
                'size',
                'colour',
                'shipping_date',
                'tracking_no',
                'logistic_provider',
                'shipping_price',
                'commission_percentage',
                'commission_percentage',
                'commission',
                'tax',
                'refunded',
            ]);
        });
    }
}
