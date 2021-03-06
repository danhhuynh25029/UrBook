<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Information;
use App\Models\Customer;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Product;

class ProfileController extends Controller
{
    public $icon = ['fas fa-map-marker-alt','fas fa-phone-alt','fab fa-facebook-square','far fa-envelope'];
    public function profile(Request $request){
        $id = $request->session()->get('id');
        $user = Users::find($id);
        $infors = Information::all();
        $cart = $request->session()->get('cart');
        return view('User/profile',[
            'infors'=>$infors,
            'user'=>$user,
            'icon'=>$this->icon,
            'cart'=>$cart
        ]);
    }
    public function inforUser(Request $request){
        $id = $request->session()->get('id');
        $user = Users::find($id);
        // dd($user);
         $cart = $request->session()->get('cart');
        $infors = Information::all();
        return view('User/infor',[
            'infors'=>$infors,
            'user'=>$user,
            'icon'=>$this->icon,
            'cart'=>$cart
        ]);
    }
    public function updateInfor(Request $request){
        $name = $request->name;
        $password = $request->password;
        $phone = $request->phone;
        $address = $request->address;
        $email = $request->mail;
        $fullname = $request->fullname;
        $id = $request->session()->get('id');
        $user = Users::find($id);
        $user->fullname = $fullname;
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->address = $address;
        $user->phone_number = $phone;
        $user->save();

        return redirect()->route('profile.infor');
    }

    public function ordering(Request $request){
        $id = $request->session()->get('id');
        $user = Users::find($id);
        $customers = Customer::where([['user_id','=',$user->id],['status','!=',3]])->get();
        $bills = array();
        foreach($customers as $key => $item){
            $b = Bill::where('customer_id',$item->id)->get();
            $bills[$key] = $b;
        }
         $cart = $request->session()->get('cart');
        $infors = Information::all();
        return view('User/ordering',[
            'infors'=>$infors,
            'customers'=>$customers,
            'bills'=>$bills,
            'user'=>$user,
            'icon'=>$this->icon,
            'cart'=>$cart
        ]);
        // dd($customers);
    }
    public function ordercompeleted(Request $request){
        $id = $request->session()->get('id');
        $user = Users::find($id);
        $customers = Customer::where([['user_id','=',$user->id],['status','=',3]])->get();
        $bills = array();
        foreach($customers as $key => $item){
            $b = Bill::where('customer_id',$item->id)->get();
            $bills[$key] = $b;
        }
        $infors = Information::all();
         $cart = $request->session()->get('cart');
        return view('User/ordercompeleted',[
            'infors'=>$infors,
            'customers'=>$customers,
            'bills'=>$bills,
            'user'=>$user,
            'icon'=>$this->icon,
            'cart'=>$cart
        ]);
    }
    public function detail(Request $request){
        $infors = Information::all();
         $cart = $request->session()->get('cart');
        $id = $request->session()->get('id');
        $user = Users::find($id);
        $c_id = $request->id;
        $status = $request->status;
        $customer = Customer::find($c_id);
        $bill = Bill::where('customer_id',$customer->id)->get();
        $bill_d = BillDetail::where('bill_id',$bill[0]->id)->get();
        $products = array();
            $quantity = array();
            foreach($bill_d as $key => $item){  
                $p = Product::find($item->product_id);
                $products[$key] = $p;
                $quantity[$key] = $item->quantity;
            }
        return view('User/detail',[
            'infors'=>$infors,
            'customer'=>$customer,
            // 'bills'=>$bills,
            'user'=>$user,
            'icon'=>$this->icon,
            'cart'=>$cart,
            'products'=>$products,
            'quantity'=>$quantity
        ]);
    }
}
