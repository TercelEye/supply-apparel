<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use \App\Lookbook;
use \App\ProductType;
use Validator;
use Auth;

class CreateLookbookController extends Controller
{
    public function index()
    {
    	//$blog = new Blog;
    	$product_type = ProductType::all()->where('name','!=','All');
    	$lookbook = new Lookbook;
    	return view('lookbook.add_lookbook',compact('product_type','lookbook'));
    }

    public function create(Request $request)
    {
		$this->validate($request, [
			'title' => 'required',
			'text' => 'required',
			'pdf' => 'required',		
			'image' => 'required',		
		]);
		//dd($request->all());
		$shopid = Auth::user()->shop->id;

		$lookbook = new \App\Lookbook;
		$lookbook->title = $request->title; 
		$lookbook->text = $request->text; 
		$lookbook->shop_id = $shopid;
		$lookbook->product_type_id = $request->product_type_id; 
		$lookbook->image ="";// $request->file('image')->store('uploads'); 
		$lookbook->pdf = $request->file('pdf')->store('uploads'); 
		$lookbook->image = $request->file('image')->store('uploads');
		$lookbook->status = 0;
		$lookbook->order = 0;
		$lookbook->save();

		if($request->publish_add!=""){
			return redirect('lookbook/create');
		}
		return redirect('seller');

    }

public function edit(Request $request)
	{
		$shopid = Auth::user()->shop->id;
		$lookbook  = Lookbook::where('id',$request->id)
						  ->where('shop_id',$shopid)
						  ->first();
		$product_type = ProductType::all()->where('name','!=','All');
		return view('lookbook.add_lookbook',compact('lookbook','product_type'));
	}
	
	public function update(Request $request)
	{
		$shopid = Auth::user()->shop->id;
		$lookbook  = \App\Lookbook::where('id',$request->id)
						  ->where('shop_id',$shopid)
						  ->first();
		$lookbook->title = $request->title;
		$lookbook->text = $request->text;
		$lookbook->product_type_id = $request->product_type_id; 

		if ($request->hasFile('pdf')) {
			$lookbook->pdf = $request->file('pdf')->store('uploads'); 
		}
		if ($request->hasFile('image')) {
			$lookbook->image = $request->file('image')->store('uploads'); 
		}

		$lookbook ->save();

		if($request->publish_add!=""){
			return redirect('lookbook/create');
		}
		return redirect('seller');
	}

	public function delete(Request $request)
	{
		$lookbook  = \App\Lookbook::where('id',$request->id)->first();
		$lookbook->delete();
		return redirect()->back();
	}


	public function view()
	{
		$shopid = Auth::user()->shop->id;
		$lookbook  = \App\Lookbook::where('shop_id',$shopid)->get();
		//return view('seller.dashboard',compact('lookbook'));
	}
}
