<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;
use \App\Role;
use \App\User;
use Validator;
use Redirect;
class BecomeSellerController extends Controller
{
   
    public function index(){
        if(!Auth::guest()){
            //if already registered user
           $user = Auth::user(); 
           $this->make_as_seller($user);
           return redirect("");
        }
        return view('shop.register');
    }
    /* register seller **/
    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $this->make_as_seller($user);
    }
    //make user as seller 
    private function make_as_seller($user){
        if (!$user->roles->contains(2)) {
            $user->roles()->attach(2); 
        }
    }
}
