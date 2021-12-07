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
            $name = $request->cookie('name');
            $password = $request->cookie('password');
            return view('Login/signin',['name'=>$name,'password'=>$password]);
        }else{
            $name = $request->name;
            $password = $request->password;
            $user = Users::where([['name','=',$name],['password','=',$password]])->get();
            if(count($user) != 0){
                if((int)$user[0]->id == 1){
                    $request->session()->put('id',$user[0]->id);
                    $request->session()->put('name',$name);
                    $request->session()->put('password',$password);
                    return redirect()->route('admin');
                }else{
                    // tao cookie luu thong tin nguoi dung
                    $cookie_name = Cookie::make('name',$name);
                    $cookie_pass = Cookie::make('password',$password);
                    // tao session kiem tra
                    $request->session()->put('id',$user[0]->id);
                    $request->session()->put('name',$name);
                    $request->session()->put('password',$password);
                    return redirect()->route('home',['user'=>$user[0]])->withCookie($cookie_name)->withCookie($cookie_pass);
                }
            }else{

                return redirect()->route('signin');
            }
        }
    }
    public function signup(Request $request){
        if($request->isMethod('get')){
            // echo $request->cookie('email');
            return view('Login/signup');
        }else{
            $name = $request->name;
            $email = $request->email;
            $password = $request->password;
            $user = new Users;
            $user->name = $name;
            $user->email = $email;
            $user->password = $password;
            $user->save();
            return redirect()->route('signin');
            // dd($request->input());
        }
    }
    // public function setSession(Request $request){
    //     $request->session()->put('name','danh');
    //     $request->session()->push('cart.products',['id'=>'2','quantity'=>'2']);
    //     $request->session()->push('cart.products',['id'=>'1','quantity'=>'2']);
    // }
    // public function getSession(Request $request){
    //     // $ls = $request->session()->get('cart');
    //     // // foreach($ls as $key =>$value){
    //     // //     $key =  (string)$key;
    //     // //     $request->session()->forget('cart'.$key);
    //     // // }
    // }
}
