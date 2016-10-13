<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\FeaturedProduct;
use App\Http\Requests;

class FeaturedProductController extends Controller
{
    public function index(){
        $featured_products = FeaturedProduct::all();
    	return view('admin.featured_product',compact('featured_products'));
    }

    //save featured product
    public function store(Request $request){
        $this->validate($request,[
            'product_id'=>'required',
        ]);
    	$featured_product = new FeaturedProduct;
    	$featured_product->product_id = $request->product_id;
    	$featured_product->status = 1;
    	$featured_product->save();
    	return redirect()->back();
    }
    //destroy
    public function destroy(Request $request){
        $this->validate($request,[
            'id'=>'required',
        ]);
        $featured = FeaturedProduct::find($request->id);
        $featured->delete();
        return redirect()->back();
    }

    //get product ajax 
    public function get_products(Request $request){
    	$product = Product::where('title','like',$request->term.'%')->get();
    	$return = array();
    	foreach ($product as $row) {
    		$return[]=[
    			'id'=>$row->id,
                'label'=>$row->title,
                'seller'=>$row->shop->shop_name,
    			'link'=>url('product/'.$row->slug),
    			'value'=>$row->title
    		];
    	}
    	return $return;
    }
}
