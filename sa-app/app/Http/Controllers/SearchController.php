<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Product;
use App\ProductType;
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

    private function higlighter_search($title,$term){
        $title = strtolower($title);
        $term = strtolower($term);
        return str_replace($term,"<b>".$term."</b>", $title);
    }

    //get ajax_search 
    public function ajax_search(Request $request){
    	$return = array();
        //ProductType
        $ptype = ProductType::where('name','like','%'.$request->term.'%')->with('category')->first();
        if(count($ptype)>0){
            foreach ($ptype->category as $row) {
                $return[]=[
                    'id'=>$row->id, 
                    'label'=>$this->higlighter_search($ptype->name,$request->term).' <i>in</i> '.$row->title,
                    'link'=>url('search?category='.$row->id.'&q='.str_slug($row->title)),
                    'value'=>$row->title,
                ];
            }
         }
    	//category
    	$category = Category::where('title','like','%'.$request->term.'%')->get();
    	foreach ($category as $row) {
    		$return[]=[
    			'id'=>$row->id, 
                'label'=>$this->higlighter_search($row->title,$request->term),
                'link'=>url('search?category='.$row->id.'&q='.str_slug($row->title)),
    			'value'=>$row->title,
    		];
    	}
    	return $return;
	}
}
