<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Product;
class BillController extends Controller
{
    public function update(Request $request){
        $customer = Customer::find($request->id);
        $status =  $request->status;
        $customer->status = $status;
        $customer->save();
        return true;
        // $Customer->status = 
    }
    public function find(Request $request){
        $bill = Bill::find($request->id);
        $bill_d = BillDetail::where('bill_id',$bill->id)->get();
        $products = array();
        $quantity = array();
        foreach($bill_d as $key => $item){  
            $p = Product::find($item->product_id);
            $products[$key] = $p;
            $quantity[$key] = $item->quantity;
        }
        return view('Admin/billdetail',[
            'products'=>$products,
            'quantity'=>$quantity,
            'total'=>$bill->total
        ]);
    }
}
