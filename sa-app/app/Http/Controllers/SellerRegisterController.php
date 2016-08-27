<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Http\Requests;

class SellerRegisterController extends Controller
{
    public function index(){
    	return view('shop.register');
    }

    public function store(Requests $request){
    	return Validator::make($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }
}
