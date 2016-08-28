<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use Auth;
use \App\ProductType;
use \App\BoutiqueType;
use App\Http\Requests;

class CreateShopController extends Controller
{
	function __construct(){
		 $this->middleware('auth');
		if(Auth::guest()){
			return redirect('become-seller');
			echo "DD";
		}
	}
	/** create shop first step */
    public function shop_type(){
    	$product_types = ProductType::all();
    	$boutique_types = BoutiqueType::all();
    	return view('shop.type',compact('product_types','boutique_types'));
    }
    /* store to session */
    public function shop_type_store(Request $request){
		$this->validate($request, [
	            'product_type' => 'required',
	            'boutique_type' => 'required',
	            'password' => 'required',
	    ]);

	}
}
