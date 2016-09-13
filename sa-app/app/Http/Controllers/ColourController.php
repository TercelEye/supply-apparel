<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Colour;
use Auth;
use App\Http\Requests;

class ColourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colours = Colour::all();
        return view('admin.colour.index',compact('colours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colour = new Colour;
       return view('admin.colour.create',compact('colour'));
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
            'name' => 'required|unique:colours|max:255',
        ]);
        $colour = new Colour;
        $colour->name = $request->name;
        $colour->hexa_code = $request->hexa_code;
        $colour->user_id = Auth::user()->id;
        $colour->save();
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
       $colour = Colour::findOrFail($id);
       return view('admin.colour.edit',compact('colour','id'));
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
            'name' => 'required|unique:colours,name,'.$id.'|max:255',
        ]);
        $colour = Colour::find($id);
        $colour->name = $request->name;
        $colour->hexa_code = $request->hexa_code;
        $colour->save();
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
