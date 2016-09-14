<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use Illuminate\Support\Str;
use Validator;
use Auth;
use \App\ProductType;
use \App\BoutiqueType;
use \App\Shop;
use App\Http\Requests;

class CreateShopController extends Controller
{
	function __construct(){
		 $this->middleware('auth');
		if(Auth::guest()){
			return redirect('become-seller');
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
	            'country_id' => 'required',
	    ]);
	    //session
	    $shop['product_type'] = $request->product_type; 
	    $shop['boutique_type'] = $request->boutique_type; 
	    $shop['country_id'] = $request->country_id;
	    $request->session()->put('shop', $shop);

	    return redirect('my-shop/profile');
	}

	//profile
	public function profile(){
		return view('shop.profile');
	}
	public function profile_store(Request $request){
		$this->validate($request, [
	            'shop_name' => 'required|unique:shops',
	            'cover_image' => 'required|mimes:jpeg,png|dimensions:min_width=1440,min_height=500',
	            'description' => 'required|min:10',
	    ]);

		//session
		$shop=$request->session()->get('shop');
	    $shop['shop_name'] = $request->shop_name; 
	    $shop['cover_image'] =  $request->file('cover_image')->store('uploads'); 
	    $shop['description'] = $request->description;

	    $request->session()->put('shop', $shop);
	    
	    return redirect('my-shop/contact-details');
	}

	/* contact */
	public function contact(){
		return view('shop.contact');
	}

	public function contact_store(Request $request){
		

		$validator = Validator::make($request->all(), [
	            'number_prefix' => 'required',
	            'contact_number' => 'required',
	            'email_address' => 'required|email',
	            'facebook_url' => 'url',
	            'twitter_url' => 'url',
	            'instagram_url' => 'url',
	            'pinterest_url' => 'url',
	    ]);

	    $validator->after(function($validator) {
		    if (Auth::guest()) {
		        $validator->errors()->add('Erro', '401 unauthorized. you are not loged in');
		    }
		});

		  if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
		//session
		$shop=$request->session()->get('shop');
	    $shop['number_prefix'] = $request->number_prefix; 
	    $shop['contact_number'] =  $request->contact_number; 
	    $shop['email_address'] = $request->email_address;
	    $shop['facebook_url'] = $request->facebook_url;
	    $shop['twitter_url'] = $request->twitter_url;
	    $shop['instagram_url'] = $request->instagram_url;
	    $shop['pinterest_url'] = $request->pinterest_url;
	    $shop['plan_id'] = 1;
	    $shop['status'] = 1;
	    $shop['owner_id'] = Auth::user()->id;
	    // $shop['shop_slug'] = Str::slug($shop['shop_name']);
	   // dd($shop);

	    $shop_model = Shop::create($shop);
	   
	    return redirect('membership/plans');
	}
}
