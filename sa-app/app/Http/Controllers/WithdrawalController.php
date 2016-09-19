<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;

class WithdrawalController extends Controller
{
    public function store(Request $request){
    	 $validator = Validator::make($request->all(), [
            'paypal_email'   => 'required|email',
            'amount' => 'required|numeric|',
        ]);
    	 if ($validator->fails()) {
            //validation error
            $data['error'] = $validator->errors()->all();
            return \Response::json($data, 422); // Status code here
        }

         $data['error'][] = "You don't have money withdraw";
            return \Response::json($data, 422); // Status code here
    }
}
