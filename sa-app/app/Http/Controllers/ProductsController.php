<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\ProductType;

use App\Http\Requests;

class ProductsController extends Controller
{
    public function index()
    {
    	
		$ProdcutType = ProductType::where('name', '!=','All')->where('name','<>','Men')->get();
		return view('shop.add_product',compact('ProdcutType'));
    }

}
