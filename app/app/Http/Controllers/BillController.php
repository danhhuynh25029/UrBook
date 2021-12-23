<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Product;
use App\Models\Manager;
use App\Models\Sale;
class BillController extends Controller
{
     public function check($name,$password){
        // $name = $request->session()->get('name');
        // $password = $request->session()->get('password');
        $manager = Manager::where([['name','=',$name],['password','=',$password]])->get();
        if(count($manager) != 0){
            return $manager[0];    
        }else{
            return null;
        }
    }
    public function update(Request $request){
        $name = $request->session()->get('name');
        $password = $request->session()->get('password');
        if($this->check($name,$password) == null){
            return redirect()->route('signin');
        }else{
            $customer = Customer::find($request->id);
            $status =  $request->status;
            $customer->status = $status;
            if($status == 3){
                $bill = Bill::where("customer_id",$customer->id)->get();
                $bill_d = BillDetail::where("bill_id",$bill[0]->id)->get();
                foreach($bill_d as $item){
                    $product = Product::find($item->product_id);
                    $product->sold = $product->sold + $item->quantity;
                    $product->save();
                }
                // them du lieu vao ban thong ke
                $year = date("Y",strtotime($bill[0]->created_at));
                $month = date("m",strtotime($bill[0]->created_at));
                $sale = Sale::where([["year","=",$year],["month","=",$month]])->get();
                if(count($sale) != 0){
                    $sale[0]->total = $sale[0]->total + $bill[0]->total;
                    $sale[0]->save();
                }else{
                    $s = new Sale;
                    $s->total = $bill[0]->total;
                    $s->month = $month;
                    $s->year = $year;
                    $s->save();
                }
            }
            $customer->save();
        }
        return true;
        // $Customer->status = 
    }
    public function findAll(Request $request){
        $name = $request->session()->get('name');
        $password = $request->session()->get('password');
        if($this->check($name,$password) == null){
            return redirect()->route('signin');
        }else{
            $status = $request->status;
            if($status == -1){
                return redirect()->route('admin.orders');
            }else{
            $customers = Customer::where('status',$status)->get();
                // dd($customers);
                // echo 1;
            return view('Admin/bills',['customers'=>$customers,'s'=>$status]);
            }   
        }
    }
    public function detail(Request $request){
        $name = $request->session()->get('name');
        $password = $request->session()->get('password');
        if($this->check($name,$password) == null){
            return redirect()->route('signin');
        }else{
            $customer = Customer::find($request->id);
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
                'total'=>$bill->total,
                'customer'=>$customer
            ]);
        }
    }
}
