<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(){
        
    }
    public function homePage(){
        // hien thi trang chu
        return  view('home/home');
    }
    public function userInfor(){
        return "Thong tin user";
    }
    public function getCategory($id){
        // San pham theo the loai;
        return "San pham theo danh muc";
    }
    public function getProduct($id){
        // chi tiet san pham
        return 'San pham '.$id;
    }
    public function SignIn(){
        return  view('login/signin');
    }
    public function SignUp(){
        return view('login/signup');
    }
}
