<?php

namespace App\Http\Controllers;

use \App\BoutiqueType;
use \App\Category;
use \App\Brand;
use \App\Size;
use \App\Colour;
use \App\Product;
use View;
use Request;

class KidsProductsController extends Controller
{

    public function index()
    {
        $boutique_types = BoutiqueType::all();
        $categories      = Category::all();
        $brands      = Brand::all();
        $sizes      = Size::all();
        $colours      = Colour::all();
        $product_items = $this->filter();
        return view('products.kids', compact(
            'categories', 'boutique_types', 'brands','sizes','colours','product_items'
        ));
    }
    private function get_products(){
    	$products = Product::active()->ofType('kids');

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

    public function filter(){
    	$products = $this->get_products();
    	$item_type = "filter";
    	$is_pagination = true;
        $html = View::make('componets.product.gridview',compact('products','item_type','is_pagination'));
        $result = ['html'=>$html->render()];
        return $result;
    }
}
