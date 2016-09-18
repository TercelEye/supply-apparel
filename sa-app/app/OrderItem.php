<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Product;
use \App\Colour;
use \App\Size;
class OrderItem extends Model
{
    protected $table = "items_order";

    public function product(){
    	return $this->belongsTo(Product::class,'product_id','id');
    }
    public function get_colour(){
    	return $this->belongsTo(Colour::class,'colour','id');
    }
    public function get_size(){
    	return $this->belongsTo(Size::class,'size','id');
    }
}
