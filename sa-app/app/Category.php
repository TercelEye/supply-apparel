<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable  =[
    'title','status','row_order','parent_id','user_id','updated_at','created_at'
    ];
    
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    
    public function getStatusAttribute($status){
    	 return ($status==1?true:false);
    }

    public function children() {
    	return $this->hasMany('\App\Category','parent_id');
	}
	public function parent() {
	    return $this->belongsTo('\App\Category','parent_id');
	}
    public function type(){
        return $this->hasOne('\App\ProductType','id','product_type_id');
    }
}
