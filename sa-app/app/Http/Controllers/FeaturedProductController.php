<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\FeaturedProduct;
use App\Http\Requests;

class FeaturedProductController extends Controller
{
    public function index(){
    	return view('admin.featured_product');
    }
    //get featured 
    public function get(){
    	
    }
    //save featured product
    public function store(Request $request){
    	$featured_product = new FeaturedProduct;
    	$featured_product->product_id = $request->product_id;
    	$featured_product->status = 1;
    	$featured_product->save();
    	return true;
    }

    //get product ajax 
    public function get_products(Request $request){
    	$product = Product::where('title','like',$request->term.'%')->get();
    	$return = array();
    	foreach ($product as $row) {
    		$return[]=[
    			'id'=>$row->id,
    			'label'=>$row->title,
    			'value'=>$row->title
    		];
    	}
    	return $return;
    }
}
