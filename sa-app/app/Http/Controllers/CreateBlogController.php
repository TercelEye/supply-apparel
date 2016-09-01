<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use \App\Blog;
use Validator;
use Auth;

class CreateBlogController extends Controller
{
    public function index()
    {
    	//$blog = new Blog;
    	return view('blog.add_blog');
    }

    public function create(Request $request)
    {
		$this->validate($request, [
			'title' => 'required',
			// 'photo' => 'required',		
			'text' => 'required',
		]);
		$userid = Auth::user()->id;
		$blog = new \App\Blog;
		$blog->title = $request->title; 
		$blog->userid = $userid;
		$blog->text = $request->text; 
		$blog->photo = $request->file('photo')->store('uploads'); 
		$blog->status = 0;
		$blog->order = 0;
		$blog->save();
		return redirect('blog/view');
    }

public function edit(Request $request)
	{
		$userid = Auth::user()->id;
		$blog  = \App\blog::where('id',$request->id)
						  ->where('userid',$userid)
						  ->first();
		return view('blog.add_blog',compact('blog'));
	}
	
	public function update(Request $request)
	{
		$userid = Auth::user()->id;
		$blog  = \App\blog::where('id',$request->id)
						  ->where('userid',$userid)
						  ->first();
		$blog->title = $request->title;
		$blog->text  = $request->text;

		if ($request->hasFile('photo')) {
			$blog->photo = $request->file('photo')->store('uploads'); 
		}

		$blog ->save();
		return redirect('blog/view');
	}

	public function delete(Request $request)
	{
		$blog  = \App\Blog::where('id',$request->id)->first();
		$blog->delete();
		return redirect()->back();
	}


	public function view()
	{
		$userid = Auth::user()->id;
		$blog  = \App\blog::where('userid',$userid)->get();
		return view('blog.edit_blog',compact('blog'));
	}
}
