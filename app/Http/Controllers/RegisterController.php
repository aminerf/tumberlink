<?php


namespace App\Http\Controllers;

use App\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    public function getConfirm(){
        return view('confirm'); 
    }
    
     public function getFeed(){
        return view('home');
    }
    
    public function postRegister(Request $request){
        $day = $request['day'];
        $month = $request['month'];
        $year = $request['year'];
        $gender = $request['gender'];
        $user_id = Auth::User()->id ;

        $register = new register();

        $register->day = $day;
        $register->month = $month;
        $register->year = $year;
        $register->gender = $gender;
        $register->user_id = $user_id;

        $register->save();


        return redirect()->route('confirm');

    }
}
