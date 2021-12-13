<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Information;
use App\Models\Product;
use App\Models\Users;
use App\Models\Manager;
use App\Models\Bill;
use App\Models\Customer;
class AdminController extends Controller
{
    public function check($name,$password){
        // $name = $request->session()->get('name');
        // $password = $request->session()->get('password');
        $manager = Manager::where([['name','=',$name],['password','=',$password]])->get();
        if(count($manager) != 0){
            return true;    
        }else{
            return false;
        }
    }
    public function all(Request $request){
        $name = $request->session()->get('name');
        $password = $request->session()->get('password');
        // $user = Users::find(1);
        if($this->check($name,$password) == true){
            return view('Admin/bills');    
        }else{
            return redirect()->route('signin');
        }
    }
    public function infors(Request $request){
        $name = $request->session()->get('name');
        $password = $request->session()->get('password');
        // $user = Users::find(1);
        if($this->check($name,$password) == true){
            $infor = Information::all();
            return view('Admin/infors',['infor'=>$infor]);  
        }else{
            return redirect()->route('signin');
        }
    }
    public function products(Request $request){
        $name = $request->session()->get('name');
        $password = $request->session()->get('password');
        // $user = Users::find(1);
        if($this->check($name,$password) == true){
            $product = Product::all();
            return view('Admin/products',['products'=>$product]);  
        }else{
            return redirect()->route('signin');
        }
        
    }
    public function categories(Request $request){
        $name = $request->session()->get('name');
        $password = $request->session()->get('password');
        // $user = Users::find(1);
        if($this->check($name,$password) == true){
             $ls = Category::all();
             return view('Admin/categories',['cate'=>$ls]); 
        }else{
            return redirect()->route('signin');
        }
       
    }
    public function orders(Request $request){
        $name = $request->session()->get('name');
        $password = $request->session()->get('password');
        // $user = Users::find(1);
        if($this->check($name,$password) == true){
            $bills = Bill::all();
            $customers = Customer::all();
             return view('Admin/bills',
                ['customers'=>$customers]
            );
        }else{
            return redirect()->route('signin');
        }
        
    }
    public function users(Request $request){
        $name = $request->session()->get('name');
        $password = $request->session()->get('password');
        // $user = Users::find(1);
        if($this->check($name,$password) == true){
             $users = Users::all();
            return view('Admin/users',['users'=>$users]);
        }else{
            return redirect()->route('signin');
        }
        
    }
    public function managers(Request $request){
        $name = $request->session()->get('name');
        $password = $request->session()->get('password');
        // $user = Users::find(1);
        if($this->check($name,$password) == true){
             $managers = Manager::all();
            return view('Admin/managers',['managers'=>$managers]);
        }else{
            return redirect()->route('signin');
        }
    }
}
