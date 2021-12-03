<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
class InforController extends Controller
{
    public function update(Request $request){
        if($request->isMethod('get')){
            $infor = Information::find($request->id);
            return view('Admin/form/editInfor',['path'=>'infors.update','infor'=>$infor]);
        }else{
            $infor = Information::find($request->id);
            $infor->infor = $request->name;
            $infor->save();
            return redirect()->route('admin');
        }
    }
}
