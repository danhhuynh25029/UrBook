<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;
use App\Models\Information;
class HomeController extends Controller
{
    // Hien thi sach dang ban 
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
    // Hien thi chi tiet sach 
    public function showDetail(Request $request){
        $product = Product::find($request->id);
         $infors = Information::all();
        return view('Home/detail',[
            'product'=>$product,
            'infors'=>$infors
        ]);
    }
    // hien thi gio hang
    public function showCart(Request $request){
        $infors = Information::all();
        $products = array();
        $quantitys = array();
        $ls = $request->session()->get('cart');
        if($ls != null){
            foreach($ls as $key =>$value){
                $product = Product::find($value['id']);
                $products[$key] = $product;
                $quantitys[$key] = $value['quantity'];  
            }   
        }
        return view('Home/cart',[
            'infors'=>$infors,
            'products'=>$products,
            'quantitys'=>$quantitys,
        ]);
    }
}
