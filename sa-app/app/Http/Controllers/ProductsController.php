<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

use App\Http\Requests;

class ProductsController extends Controller
{
	public function single_product($slug){
		
		$product = Product::where('slug',$slug)->active()->first();
		return view('products.single_view',compact('product'));
	}
    public function index()
    {
    	
		$ProdcutType = ProductType::where('name', '!=','All')->where('name','<>','Men')->get();
		return view('product.add_product',compact('ProdcutType'));
    }

}
