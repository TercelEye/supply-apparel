<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Category;
use \App\Brand;
use \App\Product;
use \App\ProductType;
use \App\Size;
use Auth;
use App\Http\Requests;

class CreateProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      	$categories = Category::all();
        $brands = Brand::all();
        $product_type = ProductType::all()->where('name','!=','All');
        $sizes = Size::all();
        $product = new Product;
        return view('shop.create_product',compact('categories','brands','product','product_type','sizes'));
    }
    /*
    create brand
    */

    private function create_brand($brand_name){
    	if(is_numeric($brand_name)){
        	return $brand_name;
        }
        $is_exist = Brand::where('name',$brand_name)->first();
        if($is_exist!=""){
        	return $is_exist->id;
        }
        $brand = new Brand;
        $brand->name = $brand_name;
        $brand->logo = '';
        $brand->webiste = '';
        $brand->user_id = Auth::user()->id;
        $brand->save();
        return $brand->id;
    }

    /* 
		if new create category 
		else return id
    */
    private function create_category($category){
    	if(is_numeric($category)){
   			//if numaric
        	return $category;
        }
        $find = Category::where('title',$category)->first();
        if($find!=""){
        	return $find->id;
        }
        $user_id = Auth::user()->id;
    	$insert = [
    		'title'=>$category,
    		'status'=>1,
    		'row_order'=>0,
    		'parent_id'=>0,
    		'user_id'=>$user_id,
    	];
    	$category = Category::create($insert);
    	return $category->id;
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'title'=>'required',
        ]);
         
       // dd($request->all());
       

        $shop_id = Auth::user()->shop->id;
        $product = new Product;
        $product->description = $request->description;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->shop_id = $shop_id;
        $product->price_discounts = ($request->price_discounts == ""?0 : $request->price_discounts );
        $product->is_sale = ($request->is_sale==""?0:$request->is_sale);
        $product->shipping_local_price = ($request->shipping_local_price==''?'0':$request->shipping_local_price);
        $product->shipping_local_duration = ($request->shipping_local_duration==""?0:$request->shipping_local_duration);
        $product->shipping_int_disabled = ($request->shipping_int_disabled==""?0:$request->shipping_int_disabled);
        $product->shipping_int_price = $request->shipping_int_price;
        $product->shipping_int_duration = ($request->shipping_int_duration==""?0:$request->shipping_int_duration);
        $product->logistic_provider = $request->logistic_provider;
        $product->product_type_id = $request->product_type_id;
        $product->brand_id = $this->create_brand($request->brand_id);
        $product->category_id = $this->create_category($request->category_id);;
        $product->is_active = 0;
        $product->save();

        $sizes_array = $request->product_size;
        $product->sizes()->sync($sizes_array);

        return redirect('seller/product/images/'.$product->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $product_type = ProductType::all()->where('name','!=','All');
        $sizes = Size::all();
        $product = Product::find($id);
        return view('shop.create_product',compact('categories','brands','product','product_type','sizes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->description = $request->description;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->price_discounts = ($request->price_discounts == ""?0 : $request->price_discounts );
        $product->is_sale = ($request->is_sale==""?0:$request->is_sale);
        $product->shipping_local_price = ($request->shipping_local_price==''?'0':$request->shipping_local_price);
        $product->shipping_local_duration = ($request->shipping_local_duration==""?0:$request->shipping_local_duration);
        $product->shipping_int_disabled = ($request->shipping_int_disabled==""?0:$request->shipping_int_disabled);
        $product->shipping_int_price = $request->shipping_int_price;
        $product->shipping_int_duration = ($request->shipping_int_duration==""?0:$request->shipping_int_duration);
        $product->logistic_provider = $request->logistic_provider;
        $product->product_type_id = $request->product_type_id;
        $product->brand_id = $this->create_brand($request->brand_id);
        $product->category_id = $this->create_category($request->category_id);;
        $product->save();

        $sizes_array = $request->product_size;
        $product->sizes()->sync($sizes_array);

        return redirect('seller/product/images/'.$product->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
