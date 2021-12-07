<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Information;
use App\Models\Product;
use App\Models\Users;
class AdminController extends Controller
{
    public function all(Request $request){
        $name = $request->session()->get('name');
        $password = $request->session()->get('password');
        $user = Users::find(1);
        if($user->name == $name && $user->password == $password){
            echo 1;
            return view('Admin/orders');    
        }else{
            echo 1;
            return redirect()->route('signin');
        }
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
        $users = Users::all();
        return view('Admin/users',['users'=>$users]);
    }
    public function edit(){
        return view('Admin/form/editCate');
    }
}
