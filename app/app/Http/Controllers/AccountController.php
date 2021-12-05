<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function signin(Request $request){
        if($request->isMethod('get')){
            return view('Login/signin');
        }else{
            $email = $request->email;
            $password = $request->password;
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                return "dinh dang khong hop le";
            }else{
                return "post";
            }
        }
        
    }
    public function signup(Request $request){
        if($request->isMethod('get')){
            return view('Login/signup');
        }else{
            $email = $request->email;
            $password = $request->password;
            $user = new Users;
            $user->email = $email;
            $user->password = $password;
            $user->save();
            return redirect()->route('signin');
        }
    }
}
