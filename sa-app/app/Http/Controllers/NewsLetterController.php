<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
use Validator;

class NewsLetterController extends Controller
{
    public function store(Request $request){

 		$validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

    	if ($validator->fails()) {
            return [
            	'status'=>false,
            	'message'=>$validator->errors()->first(),
            	];
        }

    	Newsletter::subscribe($request->email);
    	return [
    		'status'=>true,
    		'message'=>"thank you for subscribing to our newsletter",
    		];
    }
}
