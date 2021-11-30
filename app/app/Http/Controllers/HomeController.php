<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    //

    public function homePage(){
        $cate = DB::table('categories')->get();
        return view('Home/books',['cate'=>$cate]);
    }
    public function showBook(){
        
    }
    public function signin(){
        return view('Login/signin');
    }
    public function signup(){
        return view('Login/signup');
    }
}
