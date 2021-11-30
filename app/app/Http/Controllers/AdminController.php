<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function all(){
        return view('Admin/orders');
        // return "Admin";
    }
    public function infors(){
        return view('Admin/infors');
    }
    public function products(){
        return view('Admin/products');
    }
    public function categories(){
        return view('Admin/categories');
    }
    public function orders(){
        return view('Admin/orders');
    }
    public function members(){
        return view('Admin/members');
    }
}
