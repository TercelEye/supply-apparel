<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\User;
use \App\Product;
class Shop extends Model
{
	protected $fillable =[
		'product_type','boutique_type','country_id','shop_name','cover_image','description','number_prefix',
		'contact_number','email_address','facebook_url','twitter_url','instagram_url','pinterest_url','plan_id','owner_id',
		'shop_slug','status',
	];
    // public function user(){
    //     return $this->belongsTo(User::class,'owner_id');
    // }

    public function products(){
    	return $this->hasMany(Product::class,'shop_id','id');
    }
}
