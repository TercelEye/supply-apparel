<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class FeaturedProduct extends Model
{
    public function product(){
    	return $this->belongsTo(Product::class);
    }
}
