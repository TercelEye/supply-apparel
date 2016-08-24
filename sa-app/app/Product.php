<?php

namespace App;
use Auth;
use \App\Shop;
use \App\Size;
use \App\Favorite;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function sizes(){
		return $this->belongsToMany('\App\Size')->withTimestamps();	
	}
	public function shop(){
		return $this->hasOne('\App\Shop','id','shop_id');	
	}

	public function favorite(){
		return $this->hasOne('\App\Favorite','product_id','id');
		
	}
}
