<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Shop;
class Lookbook extends Model
{
   public function shop(){
   	return $this->belongsTo(Shop::class);
   }
 
}
