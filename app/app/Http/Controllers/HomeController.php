<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;
class HomeController extends Controller
{
    //

    public function homePage(){
        $cate = Category::all();
        $product = Product::all();
        return view('Home/books',['categories'=>$cate,'products'=>$product]);
    }
    public function showDetail(Request $request){
        $product = Product::find($request->id);
        return $product;
    }
}
