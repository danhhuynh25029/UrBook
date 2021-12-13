<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;
use App\Models\Information;
use App\Models\Users;
class HomeController extends Controller
{
    // Hien thi sach dang ban 
    public $icon = ['fas fa-phone-alt','fab fa-facebook-square','far fa-envelope'];
    public function homePage(Request $request){
        $cates = Category::all();
        $products = Product::all();
        $infors = Information::all();
        // Lay thong tin password name;
        $id = $request->session()->get('id');
        $name = $request->session()->get('name');
        $password = $request->session()->get('password');
        $user = Users::where([
            ['name','=',$name],
            ['password','=',$password],
            ['id','=',$id]
        ])->get();
        if(count($user) > 0){
            $user = $user[0];
        }else{
            $user = null;
        }
        // $icon = ['fas fa-phone-alt','fab fa-facebook-square','far fa-envelope'];
        return view('Home/books',[
                'categories'=>$cates,
                'products'=>$products,
                'infors'=>$infors,
                'user'=>$user,
                'icon'=>$this->icon
            ]
        );
    }
    // Hien thi chi tiet sach 
    public function showDetail(Request $request){
        $product = Product::find($request->id);
        $infors = Information::all();
        $id = $request->session()->get('id');
        $name = $request->session()->get('name');
        $password = $request->session()->get('password');
        $user = Users::where([
            ['name','=',$name],
            ['password','=',$password],
            ['id','=',$id]
        ])->get();
        if(count($user) > 0){
            $user = $user[0];
        }else{
            $user = null;
        }
        return view('Home/detail',[
            'product'=>$product,
            'infors'=>$infors,
            'user'=>$user,
            'icon'=>$this->icon
        ]);
    }
    // hien thi gio hang
    public function showCart(Request $request){
        $infors = Information::all();
        $products = array();
        $quantitys = array();
        $prices = array();
        $total = array();
        $id = $request->session()->get('id');
        $name = $request->session()->get('name');
        $password = $request->session()->get('password');
        $user = Users::where([
            ['name','=',$name],
            ['password','=',$password],
            ['id','=',$id]
        ])->get();
        if(count($user) != 0){
            $ls = $request->session()->get('cart');
            // dd($ls);
            if($ls != null){
                foreach($ls as $key =>$value){
                    if(count($value) == 4){
                        $product = Product::find($value['id']);
                        $products[$key] = $product;
                        $quantitys[$key] = $value['quantity'];
                        $prices[$key] = $value['price_d'];
                        $total[$key] = $value['total'];
                    }
                }   
            }
            return view('Home/cart',[
                'infors'=>$infors,
                'products'=>$products,
                'quantitys'=>$quantitys,
                'prices'=>$prices,
                'total'=>$total,
                'user'=>$user[0],
                'icon'=>$this->icon
            ]);
        }else{
            return redirect()->route('signin');
        }
    }
    public function find(Request $request){
        $id = $request->id;
        $cates = Category::all();
        $products = null;
        if($id){
            $products = Product::where('category_id',$id)->get();
        }else{
            $products = Product::where('name','like','%'.$request->name.'%')->get();
        }
        $infors = Information::all();
        $id = $request->session()->get('id');
        $name = $request->session()->get('name');
        $password = $request->session()->get('password');
        $user = Users::where([
            ['name','=',$name],
            ['password','=',$password],
            ['id','=',$id]
        ])->get();
        if(count($user) > 0){
            $user = $user[0];
        }else{
            $user = null;
        }
        // dd($products);
        // $icon = ['fas fa-phone-alt','fab fa-facebook-square','far fa-envelope'];
        return view('Home/books',[
                'categories'=>$cates,
                'products'=>$products,
                'infors'=>$infors,
                'user'=>$user,
                'icon'=>$this->icon
            ]
        );
    }
    public function order(Request $request){
        if($request->isMethod('get')){
            $infors = Information::all();
            $id = $request->session()->get('id');
            $name = $request->session()->get('name');
            $password = $request->session()->get('password');
            $user = Users::where([
                ['name','=',$name],
                ['password','=',$password],
                ['id','=',$id]
            ])->get();
            if(count($user) > 0){
                $user = $user[0];
            }else{
                $user = null;
            }
            // dd($products);
            // $icon = ['fas fa-phone-alt','fab fa-facebook-square','far fa-envelope'];
            return view('Home/order',[
                    'infors'=>$infors,
                    'user'=>$user,
                    'icon'=>$this->icon
                ]
            );
        }else{

        }
    }
}
