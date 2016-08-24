<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use Auth;
use App\Http\Requests;

class FavoriteController extends Controller
{
    public function toggle(Product $product){
    	$guest =true;
        $user = Auth::user();
        $user->favorites()->toggle($product);

        return ['guest'=>$guest];
    }
}
