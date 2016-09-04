<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use \App\Product;
use App\Http\Requests;

class CartController extends Controller
{

	/*
		 add items to cart
	*/
    public function add(Request $request){
    	$product= Product::find($request->product_id)->active();
    	if($product!=false){
    		return response()->json([
				    'status' => false,
				    'message' => 'Invalid Product'
				]);
    	}
    	if($this->product_exist($product->id)==false){
    		//ad to cart 
    		$this->add_item_to_cart($product,$request);
    	}
    	$cart->toArray();
    }

    public function add_item_to_cart($product,$request){
    	$cart = $this->get_cart();
    	$price = ($product->is_sale==1?$product->price_discounts:$product->price);
    	$cart [$product->id]= [
    		'product_id'=>$product->id,
    		'product_name'=>$product->title,
    		'qty'=>$request->qty,
    		'price'=>$price,
    		'total'=>($price * $request->qty),
    		'shipping_local_price'=>$product->shipping_local_price,
    		'shipping_int_price'=>$product->shipping_local_price,
    		
    	];
    }
    /*
    	update qty
    */
    private function update_cart_item_qty(){

    }
    /*
    The search method searches the collection for the given value and returns its key if found. If the item is not found, false is returned.
    */
    private function product_exist($product_id){
    	$cart = $this->get_cart();
    	return $cart->search($product_id);
    }
    /*
    	get cart array 
    	return array or false
    */
    private function get_cart(){
    	return collect($request->session()->get('cart', false));
    }
}
