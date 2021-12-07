<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request){
        // dd($request->input());
        $request->session()->push('cart',['id'=>$request->id,'quantity'=>$request->quantity]);
        return redirect()->route('home');
    }
    public function delete(Request $request){
        $key = $request->key;
        $request->session()->forget('cart.'.$key);
        return redirect()->route('home.cart');
        // dd($request->session()->get('cart'));
    }
}
