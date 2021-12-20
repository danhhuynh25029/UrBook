<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;
use App\Models\Information;
use App\Models\Users;
use App\Models\Order;
use App\Models\ProductOrder;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Customer;
use App\Models\Comment;
class HomeController extends Controller
{
    // Hien thi sach dang ban 
    public $icon = ['fas fa-map-marker-alt','fas fa-phone-alt','fab fa-facebook-square','far fa-envelope'];
    public function homePage(Request $request){
        $cates = Category::all();
        $products = Product::paginate(12);
        $infors = Information::all();
        // Lay thong tin password name;
        $id = $request->session()->get('id');
        $name = $request->session()->get('email');
        $password = $request->session()->get('password');
        $user = Users::where([
            ['email','=',$name],
            ['password','=',$password],
            ['id','=',$id]
        ])->get();
        // $c = $request->session()->get('cart');
        if(count($user) > 0){
            $user = $user[0];
        }else{
            $user = null;   
        }
        $cart = $request->session()->get('cart');
        // $icon = ['fas fa-phone-alt','fab fa-facebook-square','far fa-envelope'];
        return view('Home/books',[
                'categories'=>$cates,
                'products'=>$products,
                'infors'=>$infors,
                'user'=>$user,
                'icon'=>$this->icon,
                'cart'=>$cart
            ]
        );
    }
    // Hien thi chi tiet sach 
    public function showDetail(Request $request){
        $product = Product::find($request->id);
        $infors = Information::all();
        $id = $request->session()->get('id');
        $name = $request->session()->get('email');
        $password = $request->session()->get('password');
        $user = Users::where([
            ['email','=',$name],
            ['password','=',$password],
            ['id','=',$id]
        ])->get();
        $comments = Comment::where('product_id',$request->id)->paginate(5);
        // dd($comments);
        $user_name = [];
        foreach($comments as $key => $item){
            $u = Users::find($item->user_id);
            $user_name[$key] = $u->name;
        }
        if(count($user) > 0){
            $user = $user[0];
        }else{
            $user = null;
        }
         $cart = $request->session()->get('cart');
        return view('Home/detail',[
            'product'=>$product,
            'infors'=>$infors,
            'user'=>$user,
            'icon'=>$this->icon,
            'cart'=>$cart,
            'comments'=>$comments,
            'user_name'=>$user_name
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
        $name = $request->session()->get('email');
        $password = $request->session()->get('password');
        $user = Users::where([
            ['email','=',$name],
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
             $cart = $request->session()->get('cart');
            return view('Home/cart',[
                'infors'=>$infors,
                'products'=>$products,
                'quantitys'=>$quantitys,
                'prices'=>$prices,
                'total'=>$total,
                'user'=>$user[0],
                'icon'=>$this->icon,
                'cart'=>$cart
            ]);
        }else{
            return redirect()->route('signin');
        }
    }
    public function find(Request $request){
        $s = array('top'=>'DESC','down'=>'ASC','date'=>'DESC','sell'=>'DESC');
        $s1 = array('top'=>'price','down'=>'price','date'=>'created_at','sell'=>'sold');
        $id = $request->id;
        $sort = $request->sort;
        $cates = Category::all();
        $name = $request->name;
        $products = null;
        if($id && $sort && $name){
            $products = Product::orderBy($s1[$sort],$s[$sort])->where([['category_id','=',$id],['name','like','%'.$request->name.'%']])->paginate(12);
        }else if($id && $sort){
            $products = Product::orderBy($s1[$sort],$s[$sort])->where('category_id',$id)->paginate(12);
        }else if($id && $name){
            $products = Product::where([['category_id','=',$id],['name','like','%'.$request->name.'%']])->paginate(12);
        }
        else if($name && $sort){
            $products = Product::orderBy($s1[$sort],$s[$sort])->where('name','like','%'.$request->name.'%')->paginate(12);
        }else if($id){
            $products = Product::where('category_id',$id)->paginate(12);
        }else if($sort){
             $products = Product::orderBy($s1[$sort],$s[$sort])->paginate(12); 
        }else{
            $products = Product::where('name','like','%'.$request->name.'%')->paginate(12);
        }
        $infors = Information::all();
        $id = $request->session()->get('id');
        $name = $request->session()->get('email');
        $password = $request->session()->get('password');
        $user = Users::where([
            ['email','=',$name],
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
         $cart = $request->session()->get('cart');
        return view('Home/books',[
                'categories'=>$cates,
                'products'=>$products,
                'infors'=>$infors,
                'user'=>$user,
                'icon'=>$this->icon,
                'cart'=>$cart
            ]
        );
    }
    public function order(Request $request){
        if($request->isMethod('get')){
            $infors = Information::all();
            $id = $request->session()->get('id');
            $name = $request->session()->get('email');
            $password = $request->session()->get('password');
            $user = Users::where([
                ['email','=',$name],
                ['password','=',$password],
                ['id','=',$id]
            ])->get();
            if(count($user) > 0){
                $user = $user[0];
            }else{
                $user = null;
            }
            $products = $request->session()->get('cart');
            $s = 0;
            foreach($products as $key => $value){
                $s += $value['total'];
            }
            // dd($products);
            // $icon = ['fas fa-phone-alt','fab fa-facebook-square','far fa-envelope'];
            $cart = $request->session()->get('cart');
            return view('Home/order',[
                    'infors'=>$infors,
                    'user'=>$user,
                    'icon'=>$this->icon,
                    'total'=>$s,
                    'cart'=>$cart
                ]
            );
        }else{
                // $user_id = $request->session()->get('id');
                $products = $request->session()->get('cart');
                $s = 0;
                foreach($products as $key => $value){
                    $s += $value['total'];
                }
                // tao nguoi mua
                $customer = new Customer;
                $customer->fullname = $request->fullname;
                $customer->address = $request->address;
                $customer->phone_number = $request->phone;
                $customer->note = $request->note;
                $customer->user_id = $request->session()->get('id');
                $customer->status = 0;
                $customer->save();
                // tao hoa don
                $bill = new Bill;
                $bill->total = $s;
                $bill->customer_id = $customer->id;
                $bill->save();
                // tao chi tiet hoa don
                foreach($products as $key =>$value){
                    $bill_detal = new BillDetail;
                    $bill_detal->bill_id = $bill->id;
                    $bill_detal->product_id = $value['id'];
                    // cap nhat so luong san pham
                    $product = Product::find($value['id']);
                    $product->quantity = (int)$product->quantity - (int)$value['quantity'];
                    // $product->sold = (int)$product->sold + (int)$value['quantity'];
                    $product->save();
                    
                    $bill_detal->quantity = $value['quantity'];
                    $bill_detal->save();
                }
                $request->session()->forget('cart');
                return redirect()->route('home');
                // dd($products);
        }
    }
}
