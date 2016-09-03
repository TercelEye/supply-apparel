<?php

namespace App;
use Auth;
use \App\Shop;
use \App\Size;
use \App\Colour;
use \App\ProductType;
use \App\Favorite;
use Illuminate\Database\Eloquent\Model;
use \App\ProductImage;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use Sluggable;

       /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function sizes(){

        return $this->belongsToMany(Size::class,'product_size','product_id','size_id') 
        ->withTimestamps();
    
		//return $this->belongsToMany('\App\Size')->withTimestamps();	
	}
    public function colours(){

        return $this->belongsToMany(Colour::class,'product_colour_images','product_id','size_id') 
        ->withTimestamps();
    
        //return $this->belongsToMany('\App\Size')->withTimestamps();   
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
    

	 public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
    public function scopeOfType($query,$name)
    {
    	$type_id = ProductType::where('name',$name)->first()->id;
        return $query->where('product_type_id', $type_id);
    }
}
