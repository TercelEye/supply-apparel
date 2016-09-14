<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Shop;
use App\Product;
use App\Http\Requests;
use \App\Category;
use \App\Brand;
use \App\Size;
use \App\Colour;
use View;
use Request;

class StoreController extends Controller
{
    public function store(\App\Shop $shop){
    	$categories      = Category::all();
        $brands      = Brand::all();
        $sizes      = Size::all();
        $colours      = Colour::all();
 		$product_items = $this->filter($shop);
    	return view('store',compact('shop','product_items', 'categories', 'brands','sizes','colours'));
    }

     private function get_products($shop_id){
    	$products = Product::active()->ofShop($shop_id);

    	if(Request::input('size')){
    		$size_ids =Request::input('size');
   			 $products = $products->with(['sizes' => function ($query) use ($size_ids){
			    $query->wherePivotIn('size_id',$size_ids);
			}]);
			// $products = $products->with('sizes')->where('product_size.size_id',20);
    		//$products = $products->with('sizes')->sizes->contains(20);
    	}

    	//filter category
    	if(Request::input('category')){
    		$products = $products->whereIn('category_id',Request::input('category'));
    	}
    	//filter brand
    	if(Request::input('brand')){
    		$products = $products->whereIn('brand_id',Request::input('brand'));
    	}
    	//sizes 
    	return $products->paginate(15);
    } 

    public function filter(\App\Shop $shop){
    	$products = $this->get_products($shop->id);
    	$item_type = "filter";
    	$is_pagination = true;
        $html = View::make('componets.product.gridview',compact('products','item_type','is_pagination'));
        $result = ['html'=>$html->render()]; 
        return $result;
    }
}
