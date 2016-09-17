<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MyMessagesController extends Controller
{
    public function index(){
    	return view('messages.index');
    }
}
