<?php


namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Hash;
class UserController extends Controller

{
    
    public function getTumber(){
        
        
         if (Auth::User()){
        return view('step1');
            
    }else{
        return view('tumber');
           
    }    
    
        
        
    }
     

     public function getsteps1(){
         $chek =  Auth::User()->geneder;
         if ($chek == ""){
        return view('step1');
            
    }else{
        return view('confirm');
           
    }    
    }
    public function postSignUp(Request $request)
    {
      
        $email = $request['email'];
        $password = $request['password'];
        $fname = $request['fname'];
        $lname = $request['lname'];
        $phone = $request['phone'];
        $username = $request['username'];

        $user = new User();
        $user->email = $email;
        $user->user_password = $password;
        $user->fname = $fname;
        $user->lname = $lname;
        $user->phone = $phone;
        $user->username = $username;
        
        $user->save();
        
        Auth::login($user);
        return redirect()->route('step1');

    }
    
    public function postSignIn(Request $request) {
 
 $auth = User::where('username', '=', Input::get('username'))->where('user_password', '=', Input::get('user_password'))->first();
		if($auth){
			Auth::login($auth);
			return Redirect::to('feed');
		}
		else
		{
		return redirect()->route('tumber');
		}
    
    }
    public function getSignOut()
	{
		Auth::logout(); 
		return redirect()->route('tumber');
	}
  
}

