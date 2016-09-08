<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MenProductsController extends Controller
{

    public function index(){
    	
    	return view('products/men');
    }
}
