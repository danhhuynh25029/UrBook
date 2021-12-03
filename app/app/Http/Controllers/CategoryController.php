<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{

    public function insert(Request $request){
        if($request->isMethod('get')){
            return view('Admin/form/edit',['path'=>'categories.insert','cate'=>null]);
        }else{
            // echo $request->name;
            $category = new Category;
            $category->name = $request->name;
            $category->save();
            return redirect()->route('admin.categories');
        }
    }
    public function delete(Request $request){
        $id = $request->id;
        $category = Category::find($id);
        $category->delete();
        // dd($cate);
        return redirect()->route('admin.categories');
    }
    public function update(Request $request){
        if($request->isMethod('get')){
            $cate = Category::find($request->id);
            return view('Admin/form/edit',['path'=>'categories.update','cate'=>$cate]);
        }else{
            $category = Category::find($request->id);
            $category->name = $request->name;
            $category->save();
            return redirect()->route('admin.categories');
        }
    }
}
