<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use \App\Blog;
use \App\Product;
use App\Http\Requests;

class SellerController extends Controller
{
    public function index(){
    	$userid = Auth::user()->id;
    	//blog 
		$blog  = Blog::where('userid',$userid)->get();

		//products
		$products = Auth::user()->shop->products;
		$shop = Auth::user()->shop;
		return view('seller.dashboard',compact('blog','products','shop'));
    }
}
