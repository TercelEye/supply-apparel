<?php

namespace App;

use \App\Product;
use \App\Colour;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    public function colours(){
        return $this->belongsToMany(Colour::class,'product_colour_images','product_image_id','colour_id') 
        ->withTimestamps();
    }
}
