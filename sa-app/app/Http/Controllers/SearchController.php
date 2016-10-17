<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Http\Requests;

class SearchController extends Controller
{
	public function index(){
		return view('search');
	}
    //get ajax_search 
    public function ajax_search(Request $request){
    	$return = array();
    	//category
    	$category = Category::where('title','like','%'.$request->term.'%')->get();
    	foreach ($category as $row) {
    		$return[]=[
    			'id'=>$row->id,
                'label'=>$row->title,
                'link'=>url('search?category='.$row->id),
    			'value'=>$row->title,
    		];
    	}
    	return $return;
	}
}
