<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Hash;
use App\Repositories\AfricaStalkingRepository;

class LoginController extends Controller
{
    //
    public function Login(){
    	return view('login');
    }
    public function GenerateOTP(){
    	$otp= rand(111111,999999);
    	return $otp;
    }
    public function LoginUser(Request $request){
    	$credentials=request()->validate([
    		'email'=>['required', 'string', 'max:255'],
    		'password'=>['required', 'string', 'min:6']
    	]);

         $user= User::where(['email'=>$credentials['email']])->first();
        if(isset($user)){
            if (Hash::check($credentials["password"], $user->password))
                $otp =$this->generateOTP();
                $message ='your otp is ' .$otp;
                session (['otp'=>$otp]);

            $phone=$user->phone;


            $africastalking = new AfricaStalkingRepository();
            $africastalking->sendMessage($phone,$message);

            return response()->json([
                "status" => "ok",
                "hhh" => $otp
            ]);

        }
        else{
            return response()->json([
                "status" => "error",
                "message" => "Incorrect username or password"
            ]);

    	


    	}


    }

     public function VerifyOtp(Request $request)
    {
        $data =$this->validate($request, [
            'otp' => 'required',

        ]);
        $enteredOtp = $data['otp'];
        $otp = $request->session()->get('otp');

        if ($otp == $enteredOtp){
            return response()->json([
                "status" => "ok",
            ]);

        }else{
            return response()->json([
                "status" => "error",
                "errMsg" => "incorrect otp entered"
            ]);
        }

    }

    }

