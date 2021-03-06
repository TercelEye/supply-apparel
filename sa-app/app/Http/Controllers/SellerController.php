<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use \App\Blog;
use \App\Product;
use \App\Lookbook;
use App\Http\Requests;

class SellerController extends Controller
{
    public function index(){

        if(!$this->is_have_shop()){
            return view('seller.landing_page');
            // return redirect('create-boutique');
        }
        
    	$userid = Auth::user()->id;
        $shop_id = Auth::user()->shop->id;
    	//blog 
		$blog  = Blog::where('userid',$userid)->get();

        $lookbook  = Lookbook::where('shop_id',$shop_id)->get();

		//products

		$shop = Auth::user()->shop;
		$products = Auth::user()->shop->products;
		return view('seller.dashboard',compact('blog','products','shop','lookbook'));




    }

    private function is_have_shop(){
    	if(Auth::user()->shop!=""){
    		return true;
    	}
    	else false;
    	
    }
}
