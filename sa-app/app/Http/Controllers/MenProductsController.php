<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use \App\Product;
use \App\Category;
use \App\Colour;
use \App\Brand;
use \App\BoutiqueType;

use App\Http\Requests;

class MenProductsController extends Controller
{

    public function index(){
    	$BoutiqueType = BoutiqueType::all();
    	$category = Category::all();
    	return view('products.men');
    }

    public function mens_filter(){

    }
}
