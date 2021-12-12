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
        // dd($user);
        $infors = Information::all();
        return view('User/infor',[
            'infors'=>$infors,
            'user'=>$user,
            'icon'=>$this->icon
        ]);
    }
    public function updateInfor(Request $request){
        $name = $request->name;
        $password = $request->password;
        $phone = $request->phone;
        $address = $request->address;
        $email = $request->mail;
        $id = $request->session()->get('id');
        $user = Users::find($id);
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->address = $address;
        $user->phone_number = $phone;
        $user->save();

        return redirect()->route('profile.infor');
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