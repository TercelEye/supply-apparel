<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use App\User;
use Auth;
use App\Favorite;

class MyWishlistController extends Controller
{
    public function index(){
    	$user_id = Auth::user()->id;
    	$favorites = Favorite::where('user_id',$user_id)->get();
    	return view('my_wishlist',compact('favorites'));
    }
}
