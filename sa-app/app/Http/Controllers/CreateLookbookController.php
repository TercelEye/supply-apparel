<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use \App\Lookbook;
use Validator;
use Auth;

class CreateLookbookController extends Controller
{
    public function index()
    {
    	//$blog = new Blog;
    	return view('lookbook.add_lookbook');
    }

    public function create(Request $request)
    {
		$this->validate($request, [
			'title' => 'required',
			'text' => 'required',
			//'pdf' => 'required',		
			//'image' => 'required',		
		]);
		//dd($request->all());
		$shopid = Auth::user()->shop->id;

		$lookbook = new \App\Lookbook;
		$lookbook->title = $request->title; 
		$lookbook->text = $request->text; 
		$lookbook->shop_id = $shopid;
		$lookbook->image ="";// $request->file('image')->store('uploads'); 
		$lookbook->pdf = $request->file('pdf')->store('uploads'); 
		$lookbook->status = 0;
		$lookbook->order = 0;
		$lookbook->save();

		return redirect('seller');

    }

public function edit(Request $request)
	{
		$shopid = Auth::user()->shop->id;
		$lookbook  = \App\Lookbook::where('id',$request->id)
						  ->where('shop_id',$shopid)
						  ->first();
		return view('lookbook.add_lookbook',compact('lookbook'));
	}
	
	public function update(Request $request)
	{
		$shopid = Auth::user()->shop->id;
		$lookbook  = \App\Lookbook::where('id',$request->id)
						  ->where('shop_id',$shopid)
						  ->first();
		$lookbook->title = $request->title;
		$lookbook->text = $request->text;


		if ($request->hasFile('pdf')) {
			$lookbook->image = $request->file('pdf')->store('uploads'); 
		}

		$lookbook ->save();
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
