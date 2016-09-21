<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Lookbook;
use App\Http\Requests;

class LookbookController extends Controller
{
    public function show(Lookbook $lookbook){
    	return view('lookbook.lookbook_single',compact('lookbook'));
    }
}
