<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function index(){
    	return view('test');
    }
    public function store(Request $request){
    	$request->file('cover_image')->store('uploads'); 
    }
}
