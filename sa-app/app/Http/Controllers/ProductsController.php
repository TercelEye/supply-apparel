<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;
use \App\ProductImage;

use App\Http\Requests;

class ProductsController extends Controller
{
	public function single_product($slug){

		$product = Product::where('slug',$slug)->active()->first();
		$available_colours = $this->get_product_colours($product->id);
		return view('products.single_view',compact('product','available_colours'));
	}
    public function index(){
		$ProdcutType = ProductType::where('name', '!=','All')->where('name','<>','Men')->get();
		return view('product.add_product',compact('ProdcutType'));
    }

    /* 
    return colour list uniq 
    */
    private function get_product_colours($product_id){
    	$images_lists =  ProductImage::where('product_id',$product_id)->with('colours')->get();
    	$colors = array();

    	foreach ($images_lists as $img) {
    	   // dd($img->colours);
        $row = $img->colours->first();
        if($row!=""){
    			 $colors[$row->name]= [
            'id'=>$row->id,
            'hexa_code'=>$row->hexa_code,
           ];
        }
  		}
	
  		$collection = collect($colors);
      
  		return $collection;
    }

    /*
      ajax load image from colour id
      single page 
    */
    public function colours($slug,Request $request){
    	$product = Product::where('slug',$slug)->active()->first();
    	$colour_id = $request->colour_id;
    	$images_lists =  ProductImage::where('product_id',$product->id)->with('colours')->get();
  		$images=[];

  		foreach ($images_lists as $img) {
        if($request->colour_id !=""){
          //load only colour id images
    			if($img->colours->contains($colour_id)){
    				$images[]['name'] = $img->name;
    			}
        }else {
          //load all images
          $images[]['name'] = $img->name;
        }
  		}
  		$object= new Images();
  		$images = $this->array_to_obj($images,$object);
    	return view('products.image-gallery',compact('images'));
    }
 private function array_to_obj($array, &$obj){
    foreach ($array as $key => $value)
    {
      if (is_array($value))
      {
      $obj->$key = new Images();
      $this->array_to_obj($value, $obj->$key);
      }
      else
      {
        $obj->$key = $value;
      }
    }
  return $obj;
  }
}
class Images{

}
