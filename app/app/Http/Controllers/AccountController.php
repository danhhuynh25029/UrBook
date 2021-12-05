<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Cookie;
class AccountController extends Controller
{
    public function signin(Request $request){
        if($request->isMethod('get')){
            $email = $request->cookie('email');
            $password = $request->cookie('password');
            return view('Login/signin',['email'=>$email,'password'=>$password]);
        }else{
            $email = $request->email;
            $password = $request->password;
            $user = Users::where([['name','=',$email],['password','=',$password]])->get();
            if(count($user) != 0){
                if((int)$user[0]->id == 1){
                    return redirect()->route('admin');
                }else{
                    $cookie_mail = Cookie::make('email',$email);
                    $cookie_pass = Cookie::make('password',$password);
                    echo "Tao cuc ki thanh cong";
                    return redirect()->route('signin')->withCookie($cookie_mail)->withCookie($cookie_pass);
                }
            }else{
                return view('Login/signin');
            }
            ;
        }
        
    }
    public function signup(Request $request){
        if($request->isMethod('get')){
            // echo $request->cookie('email');
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
