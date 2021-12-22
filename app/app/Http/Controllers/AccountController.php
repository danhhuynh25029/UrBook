<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Cookie;
class AccountController extends Controller
{
    public function signin(Request $request){
        if($request->isMethod('get')){
            $name = $request->cookie('email');
            $password = $request->cookie('password');
            return view('Login/signin',['name'=>$name,'password'=>$password]);
        }else{
            $name = $request->name;
            $password = $request->password;
            $user = Users::where([['email','=',$name],['password','=',$password]])->get();
            $manager = Manager::where([['name','=',$name],['password','=',$password]])->get();
            if(count($manager) != 0){
                    $request->session()->put('id',$manager[0]->id);
                    $request->session()->put('name',$name);
                    $request->session()->put('password',$password);
                    return redirect()->route('admin');
            }else if(count($user) > 0){
                    // tao cookie luu thong tin nguoi dung
                    $cookie_name = Cookie::make('email',$name,60*60);
                    $cookie_pass = Cookie::make('password',$password,60*60);
                    // tao session kiem tra
                    $request->session()->put('id',$user[0]->id);
                    $request->session()->put('email',$name);
                    $request->session()->put('password',$password);
                    return redirect()->route('home',['user'=>$user[0]])->withCookie($cookie_name)->withCookie($cookie_pass);
            }
            else{

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
    public function signout(Request $request){
        $request->session()->forget('name');
        $request->session()->forget('password');
        $request->session()->forget('id');
        $request->session()->forget('cart');
        return redirect()->route('home');
    }   
    // public function setSession(Request $request){
    //     $request->session()->put('name','danh');
    //     $request->session()->put('cart.1.quantity','100');
    //     // $request->session()->push('cart.products',['id'=>'1','quantity'=>'2']);
    // }
    // public function getSession(Request $request){
    //     // $ls = $request->session()->get('cart');
    //     // // foreach($ls as $key =>$value){
    //     // //     $key =  (string)$key;
    //     $request->session()->flush();
    //     // // }
    //     $ls = $request->session()->get('cart');
    //     dd($ls);
    // }
}
