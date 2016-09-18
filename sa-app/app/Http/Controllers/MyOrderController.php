<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\Order;
use App\Http\Requests;

class MyOrderController extends Controller
{
    public function index(){
    	$products_bought = $this->products_bought();
    	return view('order.index',compact('products_bought'));
    }

    private function products_bought(){
    	return Order::where('customer_id',Auth::user()->id)->with('items')->get();
    }
}
