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
		
		return view('products.single_view',compact('product'));
	}
    public function index(){
		$ProdcutType = ProductType::where('name', '!=','All')->where('name','<>','Men')->get();
		return view('product.add_product',compact('ProdcutType'));
    }

    /* 
    return colour list
    */
    private function get_product_colours($product_id){
    	$images_lists =  ProductImage::where('product_id',$product_id)->with('colours')->get();
    	$colors = array();

    	foreach ($images_lists as $img) {
    	// dd($img->colours);
  				$colors[]= [
  					'name'=>$img->colours->name,
  					'hexa_code'=>$img->colours->hexa_code
  				];
  		}
	
  		$collection = collect($colors);
  		return $collection;
    }

    public function colours($slug,Request $request){
    	$product = Product::where('slug',$slug)->active()->first();
    	$colour_id = $request->colour_id;
    	$images_lists =  ProductImage::where('product_id',$product->id)->with('colours')->get();
  		$images=[];
  		foreach ($images_lists as $img) {
  			if($img->colours->contains($colour_id)){
  				$images[]['name'] = $img->name;
  			}
  			
  		}
  		$object= new Images();
  		$images = $this->array_to_obj($images,$object);
    	dd($this->get_product_colours($product->id));
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
