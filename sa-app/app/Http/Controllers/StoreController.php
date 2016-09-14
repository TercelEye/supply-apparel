<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shop;
use App\Http\Requests;

class StoreController extends Controller
{
    public function store(\App\Shop $shop){

    	return view('store',compact('shop'));
    }
}
