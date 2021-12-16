<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Product;
use App\Models\Manager;
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
    public function find(Request $request){
        $name = $request->session()->get('name');
        $password = $request->session()->get('password');
        if($this->check($name,$password) == null){
            return redirect()->route('signin');
        }else{
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
}
