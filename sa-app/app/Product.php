<?php

namespace App;
use Auth;
use \App\Shop;
use \App\Size;
use \App\Favorite;
use Illuminate\Database\Eloquent\Model;
use \App\ProductImage;
class Product extends Model
{
    public function sizes(){
		return $this->belongsToMany('\App\Size')->withTimestamps();	
	}
	public function shop(){
		return $this->hasOne(Shop::class,'id','shop_id');	
	}
 	public function user_favorites(){
 		$user_id = (!Auth::guest() ? Auth::user()->id :0);
        return $this->belongsToMany(Product::class,'favorites')->where('user_id',$user_id);
    }

    public function images(){
    	return $this->hasMany(ProductImage::class,'product_id','id');
    }
    

	
}
