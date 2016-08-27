<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CreateShopController extends Controller
{
    public function shop_type(){
    	return view('shop.type');
    }
}
