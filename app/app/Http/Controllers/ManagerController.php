<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manager;
class ManagerController extends Controller
{
    public function insert(Request $request){
        if($request->isMethod('get')){
            return view('Admin/form/insertManager',['path'=>'managers.insert','manager'=>null]);
        }else{
            $manager = new Manager;
            $manager->name = $request->name;
            $manager->password = $request->password;
            $manager->save();
            return redirect()->route('admin.managers');
        }
    }
    public function update(Request $request){
        if($request->isMethod('get')){
            $manager = Manager::find($request->id);
            return view('Admin/form/insertManager',['path'=>'managers.update','manager'=>$manager]);
        }else{
            $manager = Manager::find($request->id);
            $manager->name = $request->name;
            $manager->password = $request->password;
            $manager->save();
            return redirect()->route('admin.managers');
        }
    }
    public function delete(Request $request){
        $manager = Manager::find($request->id);
        $manager->delete();
        return redirect()->route('admin.managers');
    }
}
