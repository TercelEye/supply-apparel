<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MyAccountController extends Controller
{
    public function index(){
    	return view('account.index');
    }
}
