<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Information;
use App\Models\Product;
class AdminController extends Controller
{
    public function all(){
        return view('Admin/orders');
        // return "Admin";
    }
    public function infors(){
        $infor = Information::all();
        return view('Admin/infors',['infor'=>$infor]);
    }
    public function products(){
        $product = Product::all();
        return view('Admin/products',['products'=>$product]);
    }
    public function categories(){
        // $cate = DB::table('categories')->get();
        $ls = Category::all();
        // dd($ls);
        return view('Admin/categories',['cate'=>$ls]);
    }
    public function orders(){
        return view('Admin/orders');
    }
    public function users(){
        return view('Admin/users');
    }
    public function edit(){
        return view('Admin/form/editCate');
    }
}
