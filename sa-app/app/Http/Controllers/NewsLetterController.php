<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsLetterController extends Controller
{
    public function store(){
    	$t = Newsletter::subscribe('rincewind@discworld.com');
    	//echo Newsletter::getLastError();

    	dd(Newsletter::getApi()->getLastResponse());
    	echo "DDDD";
    }
}
