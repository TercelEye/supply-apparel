<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ShopController extends Controller
{
    public function landing_page(){
    	return view('shop.landing_page');
    }
}
