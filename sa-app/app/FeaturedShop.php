<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Shop;
class FeaturedShop extends Model
{
    public function shop(){
    	return $this->belongsTo(Shop::class);
    }
}
