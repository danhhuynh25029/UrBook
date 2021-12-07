<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;
use App\Models\Information;
class HomeController extends Controller
{
    //

    public function homePage(){
        $cates = Category::all();
        $products = Product::all();
        $infors = Information::all();
        return view('Home/books',[
                'categories'=>$cates,
                'products'=>$products,
                'infors'=>$infors,
            ]
        );
    }
    public function showDetail(Request $request){
        $product = Product::find($request->id);
         $infors = Information::all();
        return view('Home/detail',[
            'product'=>$product,
            'infors'=>$infors
        ]);
    }
    public function showCart(Request $request){
        $infors = Information::all();
        return view('Home/cart',[
            'infors'=>$infors
        ]);
    }
}
