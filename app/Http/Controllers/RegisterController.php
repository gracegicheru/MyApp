<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\User;

class RegisterController extends Controller
{
    
    public function Register(){
    	return view('auth.register');
    }
    public function RegisterUser(){

    	$credentials= request()->validate([
    		'name'=>['required', 'string','max:255'],
    		'email'=>['required', 'string', 'email','max:255', 'unique:users'],
    		'phone'=>['required', 'string','max:14'],
    		'password'=>['required', 'string','min:6'],
    	]);

    	$user= new User;
    	$user->name = $credentials['name'];
    	$user->email = $credentials['email'];
    	$user->phone = $credentials['phone'];
    	$user->password = Hash::make($credentials['password']);
    	$user->save();

    	return response()->json([
    		'status'=>'ok',
    		'data'=> $user

    	 ]);


    }
}
