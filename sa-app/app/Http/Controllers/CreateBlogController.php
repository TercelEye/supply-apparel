<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use \App\Blog;
use Validator;

class CreateBlogController extends Controller
{
    public function index()
    {
    	return view('blog.add_blog');
    }

    public function create(Request $request)
    {
		$this->validate($request, [
			'title' => 'required',
			'photo' => 'required',		
			'text' => 'required',
		]);
		
		$blog = new \App\Blog;
		$blog->title = $request->title; 
		$blog->text = $request->text; 
		$blog->status = 0;
		$blog->order = 0;
		$blog->photo = Storage::putFile('uploads', $request->file('photo'));

		//dd($blog->photo);
		$blog->save();
		//echo $request->file('photo_dd')->store('uploads');
		return redirect('shop.list');

    }
}
