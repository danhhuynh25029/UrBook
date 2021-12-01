<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function edit(){
        return view('Admin/form/edit',['path'=>'categories.update']);
    }

    public function insert(Request $request){
        if($request->isMethod('get')){
            return view('Admin/form/edit',['path'=>'categories.insert']);
        }else{
            return "post";
        }
        // dd($request);
        // return "insert";
    }
    public function delete(Request $request){
        $id = $request->id;
        $cate = Category::find($id);
        // $cate->delete();
        dd($cate);
        // return $cate;
    }
    public function update(){
        return "update";
    }
}
