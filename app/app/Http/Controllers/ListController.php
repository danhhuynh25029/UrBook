<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Bill;
use App\Models\BillDetail;
class ListController extends Controller
{
    public function show(Request $request){
        $bills = Bill::all();
        $users = Users::all();
        $total = 0;
        foreach($bills as $item){
            $total += $item->total;
        }
        return view("Admin/list",[
            "users"=>$users,
            "bills"=>$bills,
            "total"=>$total
        ]);        
    }
}
