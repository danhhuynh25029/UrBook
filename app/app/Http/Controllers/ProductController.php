<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class ProductController extends Controller
{
    public function insert(Request $request){
        if($request->isMethod('get')){
            $cate = Category::all();
            return view('Admin/form/insertProduct',['cate'=>$cate]);
        }else{
            if(!$request->hasFile('image')){
                return "Moi chon lai";
            }else{
                $pro = new Product;
                $pro->name = $request->name;
                $pro->author = $request->author;
                $pro->quantity = $request->quantity;
                $pro->price = $request->price;
                $pro->description = $request->description;
                $pro->category_id = $request->category;
                $image = $request->file('image');
                $store = $image->move('image',$image->getClientOriginalName());
                $pro->image = $store;
                $pro->save();
                return redirect()->route('admin.products');
            }
        }
    }
    public function delete(Request $request){
        $id = $request->id;
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.products');
    }
    public function update(Request $request){
        if($request->isMethod('get')){
            $id =$request->id;
            $product = Product::find($id);
            return view('Admin/form/insertProduct',['product'=>$product]);
        }else{
            
        }
        // return "update";
    }
}
