<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    public function category(){
    	return $this->hasMany('App\Category', 'product_type_id', 'id');
    }
}
