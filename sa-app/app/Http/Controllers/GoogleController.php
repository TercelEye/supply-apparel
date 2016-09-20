<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Socialite;
use App\Http\Requests;
use Auth;
use App\User;

class GoogleController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();

        // $user->token;
        // All Providers
		$user->getId();
		$user->getNickname();
		$user->getName();
		$user->getEmail();
		$user->getAvatar();

		$find = User::where('email',$user->getEmail())->first();
		if($find!=""){
			//login
			Auth::login($find);
		}else {
			//register 
			$fb_user = new User;
			$fb_user->name =$user->getName();
			$fb_user->email =$user->getEmail();
			$fb_user->avatar =$user->getAvatar();
			$fb_user->password =bcrypt(uniqid()."hs".uniqid());
			$fb_user->save();
			Auth::login($fb_user);
		}
		return redirect('home');
    }
}
