<?php

namespace App\Http\Controllers;

use App\Category;
use App\ProductType;
use Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories_list = \App\Category::with('type')->paginate(10);
        return view('admin.category.index', compact('categories_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent_categories = Category::pluck('title', 'id'); // get parents categories

        $parent_categories = array_merge(array('' => "No parent"), $parent_categories->toArray());
        $product_types     = ProductType::where('name', '!=', 'all')->pluck('name', 'id'); // get parents categories

        $product_types = array_merge(array(0 => "Select Type"), $product_types->toArray());
        $category      = new \App\Category;
        return view('admin.category.create', compact('category', 'parent_categories', 'product_types'));
    }

    public function load_category(Request $request)
    {
        $category = Category::where('product_type_id', $request->type_id)->get()->toArray(); // get parents categories
        echo "<option value=''>No parent</option>";
        foreach ($category as $cat):
            echo "<option " . ($request->id == $cat['id'] ? "selected" : "") . " value='" . $cat['id'] . "'>" . $cat['title'] . "</option>";
        endforeach;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'           => 'required|unique:categories|max:255',
            'product_type_id' => 'required',
            'row_order'       => 'required',
            'parent_id'       => 'required',
        ]);
        $category                  = new Category;
        $category->title           = $request->title;
        $category->parent_id       = $request->parent_id;
        $category->status          = $request->status;
        $category->row_order       = $request->row_order;
        $category->user_id         = Auth::user()->id;
        $category->product_type_id = $request->product_type_id;
        $category->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect("category/" . $id . "/edit");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product_types     = ProductType::where('name', '!=', 'all')->pluck('name', 'id'); // get parents categories
        $parent_categories = \App\Category::where("id", '!=', $id)->pluck('title', 'id');
        $category          = \App\Category::findOrFail($id);
        return view('admin.category.edit', compact('category', 'parent_categories', 'id', 'product_types'));
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
        $this->validate($request, [
            'title'           => 'required',
            'product_type_id' => 'required',
            'row_order'       => 'required',
            'parent_id'       => 'required',
        ]);
        $category = \App\Category::find($id);
        // $category->title = $request->title;
        // $category->parent_id = $request->parent_id;
        $category->update($request->all());
        return redirect()->back();
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
