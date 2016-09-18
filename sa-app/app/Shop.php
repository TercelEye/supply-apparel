<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\User;
use \App\Product;
use \App\Plan;
use Cviebrock\EloquentSluggable\Sluggable;

class Shop extends Model
{
    use Sluggable;


public function getRouteKeyName()
    {
        return 'shop_slug';
    }
    
      /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'shop_slug' => [
                'source' => 'shop_name'
            ]
        ];
    }

	protected $fillable =[
		'product_type','boutique_type','country_id','shop_name','cover_image','description','number_prefix',
		'contact_number','email_address','facebook_url','twitter_url','instagram_url','pinterest_url','plan_id','owner_id',
		'shop_slug','status',
	];
    // public function user(){
    //     return $this->belongsTo(User::class,'owner_id');
    // }

   public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
    public function products(){
    	return $this->hasMany(Product::class,'shop_id','id');
    }

     public function scopeOfType($query,$type_id)
    {
        return $query->where('boutique_type', $type_id);
    }

   public function plan()
   {
    return $this->belongsTo(Plan::class,'plan_id','id');
   }
}
