<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Hash;

class SampleController extends Controller
{
    //
    public function ShowRegister(){
    	return view('auth.login2');
    }
    public function LoginUsers(Request $request){

    	$credentials= request()->validate([
    		'email'=>['required','string','max:255'],
    		'password'=>['required','min:6']
    	]);

    	$user= User::where(['email'=>$credentials['email']])->first();
    	if(isset($user)){
    		if (Hash::check($credentials["password"], $user->password))
    			 return response()->json([
                "status" => "ok",
                "user" => $user,
                
            ]);


	    }




    }
}
