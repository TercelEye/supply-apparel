<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\Order;
use \App\OrderItem;
use \App\Shop;
use App\Http\Requests;

class MyOrderController extends Controller
{
    public function index(){
    	$products_bought = $this->products_bought();
    	//dd($this->products_sold());
    	return view('order.index',compact('products_bought'));
    }

    //get buy products
    private function products_bought(){
    	return Order::where('customer_id',Auth::user()->id)->with('items')->get();
    }

    //get product sold
     private function products_sold(){
    	return \App\Shop::where('owner_id',Auth::user()->id)->products->first();
    }

    //update order item
    public function update_order(OrderItem $item,Request $request){
    	$this->validate($request->all(),[
    		'id'=>'required',
    	]);
    	$item->order_status = "Processing";
    	$item->save();
    	return redirect()->back();
    }

}
