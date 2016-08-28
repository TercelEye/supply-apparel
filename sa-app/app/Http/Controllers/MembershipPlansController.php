<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Services\AdaptivePayments;
use Auth;
use \App\Plan;
use \App\Shop;
use App\Http\Requests;

class MembershipPlansController extends Controller
{
	function __construct(){
		 $this->middleware('auth');
		
	}
	//check if valid user roles have
	private function is_seller(){
		if(!Auth::user()->roles->contains(2)){
			return redirect('become-seller');
		}
	}
    public function index(){
    	$this->is_seller();
    	return view('shop/membership_plans');
    }
    //user update plan
    public function store(\App\Plan $plan){
    	if($plan->price == 0){
    		//if free plan
    		$shop_id = Auth::user()->id;
    		$shop = Shop::where('owner_id',$shop_id)->first();
    		$shop->plan_id = $plan->id;
    		$shop->save();
    		return redirect('');	
    	}
    	//change from seller
    	$this->redirect_to_paypal($plan);
    }

    public function redirect_to_paypal($plan){
    	$provider = new ExpressCheckout;

		$data = [];
		$data['items'] = [
		    [
		        'name' => $plan->name,
		        'price' => $plan->price,
		        'qty' => 1
		    ],
		];

		$data['invoice_id'] = uniqid();
		$data['invoice_description'] = "Order #$data[invoice_id] Invoice";
		$data['return_url'] = url('/payment/success');
		$data['cancel_url'] = url('/cart');

		$data['total'] = $plan->price;
		$response = $provider->setExpressCheckout($data);
		return redirect($response['paypal_link']);
    }
}
