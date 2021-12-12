<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request){
       // dd($request->input());
        $price_d = $request->price;
        $quantity = $request->quantity;
        $total = (int)$price_d*(int)$quantity;
        $request->session()->push('cart',[
            'id'=>$request->id,
            'quantity'=>$quantity,
            'total'=>$total,
            'price_d'=>$price_d
            ]
        );
        return redirect()->route('home');
    }
    public function update(Request $request){
        // $key = $request->key;
        // $quantity = $request->quantity;
        $key = $request->key;
        $price = $request->total;
        $quantity = $request->quantity;
        $request->session()->put('cart.'.$key.'.quantity',$quantity);
        $request->session()->put('cart.'.$key.'.total',$price);
        return $price;
    }
    public function delete(Request $request){
        $key = $request->key;
        $request->session()->forget('cart.'.$key);
        return redirect()->route('home.cart');
        // dd($request->session()->get('cart'));
    }
}