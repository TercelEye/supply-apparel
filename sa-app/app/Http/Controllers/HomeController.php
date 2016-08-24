<?php

namespace App\Http\Controllers;

use App\Product;
use App\user;
use View;
use Response;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $p = \App\Product::first();
        $u = \App\User::first();
        $u->favorites()->toggle($p);
        return view('home');
    }

    /*
        Homepage women section 
    */
    public function best_sellers_women(){
        $products = Product::paginate(4);
        $html = View::make('componets.product.gridview',compact('products'));
        $result = ['next_url'=>$products->nextPageUrl(),'html'=>$html->render()];
        return Response::json($result);
    }
    public function new_arrivals_women(){
        $products = Product::latest()->paginate(4);
        $html = View::make('componets.product.gridview',compact('products'));
        $result = ['next_url'=>$products->nextPageUrl(),'html'=>$html->render()];
        return Response::json($result);
    } 
    public function must_haves_women(){
        $products = Product::latest()->paginate(4);
        $html = View::make('componets.product.gridview',compact('products'));
        $result = ['next_url'=>$products->nextPageUrl(),'html'=>$html->render()];
        return Response::json($result);
    }
}
