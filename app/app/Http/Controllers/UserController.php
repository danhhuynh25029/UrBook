<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Users;
class UserController extends Controller
{
  
    public function getInfor(Request $request){
    	$name = $request->name;
    	$password = $request->password;
    	$phone = $request->phone;
    	$address = $request->address;
    	$id = $request->session()->get('id');
    	$user = Users::find($id);
    	$user->name = $name;
    	$user->password = $password;
    	$user->phone = $phone;
    	$user->address = $phone;
    	$user->phone_number = $phone;
    	$user->save();
    	return redirect()->route('profile.infor');
    }
}
