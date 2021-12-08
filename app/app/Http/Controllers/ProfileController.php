<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Information;
class ProfileController extends Controller
{
    public $icon = ['fas fa-phone-alt','fab fa-facebook-square','far fa-envelope'];
    public function profile(Request $request){
        $id = $request->session()->get('id');
        $user = Users::find($id);
        $infors = Information::all();
        return view('User/profile',[
            'infors'=>$infors,
            'user'=>$user,
            'icon'=>$this->icon
        ]);
    }
    public function inforUser(Request $request){
        $id = $request->session()->get('id');
        $user = Users::find($id);
        $infors = Information::all();
        return view('User/infor',[
            'infors'=>$infors,
            'user'=>$user,
            'icon'=>$this->icon
        ]);
    }
    public function ordering(Request $request){
        $id = $request->session()->get('id');
        $user = Users::find($id);
        $infors = Information::all();
        return view('User/ordering',[
            'infors'=>$infors,
            'user'=>$user,
            'icon'=>$this->icon
        ]);
    }
    public function ordercompeleted(Request $request){
        $id = $request->session()->get('id');
        $user = Users::find($id);
        $infors = Information::all();
        return view('User/ordercompeleted',[
            'infors'=>$infors,
            'user'=>$user,
            'icon'=>$this->icon
        ]);
    }
}
