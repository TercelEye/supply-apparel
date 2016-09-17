<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Product;
class OrderItem extends Model
{
    protected $table = "items_order";

    public function product(){
    	return $this->belongsTo(Product::class,'product_id','id');
    }
}
