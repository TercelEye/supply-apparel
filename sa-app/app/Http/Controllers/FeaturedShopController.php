<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FeaturedShop;
use App\Shop;
use App\Http\Requests;

class FeaturedShopController extends Controller
{
     public function index(){
        $featured_shops = FeaturedShop::all();
    	return view('admin.featured_shop',compact('featured_shops'));
    }
     //save featured shop
    public function store(Request $request){
        $this->validate($request,[
            'shop_id'=>'required',
        ]);
    	$featured_shop = new FeaturedShop;
    	$featured_shop->shop_id = $request->shop_id;
    	$featured_shop->status = 1;
    	$featured_shop->save();
    	return redirect()->back();
    }

     //destroy
    public function destroy(Request $request){
        $this->validate($request,[
            'id'=>'required',
        ]);
        $featured = FeaturedShop::find($request->id);
        $featured->delete();
        return redirect()->back();
    }

    //get product ajax 
    public function get_shops(Request $request){
    	$shops = Shop::where('shop_name','like',$request->term.'%')->get();
    	$return = array();
    	foreach ($shops as $row) {
    		$return[]=[
    			'id'=>$row->id,
                'label'=>$row->shop_name,
                'owner'=>$row->owner->name,
    			'link'=>url('store/'.$row->shop_slug),
    			'value'=>$row->shop_name,
    			'cover_image'=>$row->cover_image,
    			'email_address'=>$row->email_address,
    			'description'=>$row->description,
    			'contact_number'=>$row->contact_number,
    		];
    	}
    	return $return;
    }

}
