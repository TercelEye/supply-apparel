<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lang;
use Auth;
use App\Http\Requests;

class UserController extends Controller
{
	/*
		ajax login 
	*/
    public function login(Request $request){
    	$auth = false;
		$credentials = $request->only('email', 'password');
		$message= Lang::get('auth.failed');
		
		if (Auth::attempt(['email' => $request->email, 'password' =>$request->password], $request->has('remember'))) {
            // Authentication passed...
         	$auth = true; // Success
			$message='Loging successfully';
        }
		
		return response()->json([
				'auth' => $auth,
				'message' =>$message
		]);
    }
}
