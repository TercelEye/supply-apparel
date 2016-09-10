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
		if(!$this->is_have_shop()){
			return redirect('create-boutique');
		}
		$shop = Auth::user()->shop;
		$products = Auth::user()->shop->products;
		return view('seller.dashboard',compact('blog','products','shop'));
    }

    private function is_have_shop(){
    	if(Auth::user()->shop!=""){
    		return true;
    	}
    	else false;
    	
    }
}
