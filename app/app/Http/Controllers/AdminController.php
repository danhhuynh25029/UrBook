<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
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
        $cate = DB::table('categories')->get();
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
    public function getData(Request $req){
        print_r($req->input());
        // $name = $req->id;
        // echo $name;
        return "lay dau lieu";
    }
}
