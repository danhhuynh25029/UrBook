<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Information;
class ProfileController extends Controller
{
    public function profile(Request $request){
        $id = $request->session()->get('id');
        $user = Users::find($id);
        $infors = Information::all();
        return view('User/profile',[
            'infors'=>$infors,
            'user'=>$user
        ]);
    }
    public function inforUser(Request $request){
        $id = $request->session()->get('id');
        $user = Users::find($id);
        $infors = Information::all();
        return view('User/infor',[
            'infors'=>$infors,
            'user'=>$user
        ]);
    }
    public function ordering(Request $request){
        $id = $request->session()->get('id');
        $user = Users::find($id);
        $infors = Information::all();
        return view('User/ordering',[
            'infors'=>$infors,
            'user'=>$user
        ]);
    }
    public function ordercompeleted(Request $request){
        $id = $request->session()->get('id');
        $user = Users::find($id);
        $infors = Information::all();
        return view('User/ordercompeleted',[
            'infors'=>$infors,
            'user'=>$user
        ]);
    }
}
