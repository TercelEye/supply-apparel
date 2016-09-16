<?php

namespace App;

use \App\OrderItem;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function items(){
    	return $this->hasMany(OrderItem::class,'order_id');
    }
}
