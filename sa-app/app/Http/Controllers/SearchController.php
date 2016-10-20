<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Product;
use App\Http\Requests;

class SearchController extends Controller
{
    private $request;
    //pagination limit
    private $paginate = 1;

    function __construct(Request $request){
        $this->request = $request;
    }
    //make query 
    private function search_query(){
        $products = Product::active();
        if($this->request->category!=""){
            $products->where('category_id',$this->request->category);
        }
        if($this->request->q!=""){
            $products->orWhere('title','like','%'.$this->request->q.'%');
        }
        return $products->paginate($this->paginate);
    }
    //search page
	public function index(){
        $products=$this->search_query();

		return view('search',compact('products'));
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
                'link'=>url('search?category='.$row->id.'&q='.str_slug($row->title)),
    			'value'=>$row->title,
    		];
    	}
    	return $return;
	}
}
