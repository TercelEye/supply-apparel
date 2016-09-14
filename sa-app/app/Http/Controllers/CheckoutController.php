<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Shipping;
use App\Http\Requests;

class CheckoutController extends Controller
{
    public function index(){
    	$shipping = Auth::user()->shipping;
    	return view('checkout',compact('shipping'));
    }

    public function save_shipping(Request $request){
    	$this->validate($request, [
            'name'           => 'required|min:4|max:255',
            'city' => 'required',
            'street'       => 'required',
            'country_id'       => 'required',
        ]);
        $shipping_edit = Shipping::where('user_id',Auth::user()->id)->first();
        if($shipping_edit == ""){
        	//add new
        	$shipping = new Shipping;
        	$shipping->name = $request->name;
        	$shipping->city = $request->city;
        	$shipping->street = $request->street;
        	$shipping->country_id = $request->country_id;
        	$shipping->user_id = Auth::user()->id;
        	$shipping->save();

        }else {
        	//update seller
        	$shipping_edit->name = $request->name;
        	$shipping_edit->city = $request->city;
        	$shipping_edit->street = $request->street;
        	$shipping_edit->country_id = $request->country_id;
        	$shipping_edit->save();
        }
       return  redirect('payment');
    	
    }
}
