<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lookbook;
use App\FeaturedLookbook;
use App\Http\Requests;

class FeaturedLookbookController extends Controller
{
    public function index(){
        $featured_lookbooks = FeaturedLookbook::with('shop')->get();
    	return view('admin.featured_lookbook',compact('featured_lookbooks'));
    }
     //save featured shop
    public function store(Request $request){
        $this->validate($request,[
            'lookbook_id'=>'required',
        ]);
    	$featured_shop = new FeaturedLookbook;
    	$featured_shop->lookbook_id = $request->lookbook_id;
    	$featured_shop->status = 1;
    	$featured_shop->save();
    	return redirect()->back();
    }

     //destroy
    public function destroy(Request $request){
        $this->validate($request,[
            'id'=>'required',
        ]);
        $featured = FeaturedLookbook::find($request->id);
        $featured->delete();
        return redirect()->back();
    }

    //get product ajax 
    public function get_lookbooks(Request $request){
    	$lookbooks = Lookbook::where('title','like',$request->term.'%')->with('shop')->get();
    	$return = array();
    	foreach ($lookbooks as $row) {
    		$return[]=[
    			'id'=>$row->id,
                'label'=>$row->title,
                'owner'=>$row->shop->owner->name,
                'shop'=>$row->shop->shop_name,
    			'value'=>$row->title,
    			'cover_image'=>url($row->image),
    		];
    	}
    	return $return;
}
}