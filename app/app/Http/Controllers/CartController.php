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
        if($this->find($request,$request->id) == -1){
            $request->session()->push('cart',[
                'id'=>$request->id,
                'quantity'=>$quantity,
                'total'=>$total,
                'price_d'=>$price_d
                ]
            );
        }else{
            $key = $this->find($request,$request->id);
            $product = $request->session()->get('cart.'.$key);
            $total = $product['total'] + $total; 
            $quantity = $product['quantity'] + $quantity;
            $request->session()->put('cart.'.$key.'.total',$total);
            $request->session()->put('cart.'.$key.'.quantity',$quantity);
        }
        return redirect()->route('home');
    }
    public function find($request,$id){
        $cart = $request->session()->get('cart');
        // dd($cart);
        foreach($cart as $key => $item){
            if($item['id'] == $id){
                return $key;
            }
        }
        return -1;
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
