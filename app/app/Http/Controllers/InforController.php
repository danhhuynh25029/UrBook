<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
class InforController extends Controller
{
    public function edit(Request $request){
        // return view('Admin/form/editCate',[]);
        $infor = Information::find($request->id);
        // echo $request->id;
        return view('Admin/form/editInfor',['path'=>'infors.update','infor'=>$infor]);
    }
    // public function insert(Request $request){
    //     return 'insert';
    // }
    public function update(Request $request){
        $infor = Information::find($request->id);
        $infor->infor = $request->name;
        $infor->save();
        return redirect()->route('admin');
    }
    // public function delete(Request $request){
    //     return 'delete';
    // }
}
