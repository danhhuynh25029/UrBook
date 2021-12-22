<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Sale;
class ListController extends Controller
{
    public function show(Request $request){
        $bills = Bill::all();
        $users = Users::all();
        $total = 0;
        $sale = Sale::all();
        foreach($sale as $item){
            $total += $item->total;
        }
        return view("Admin/list",[
            "users"=>$users,
            "bills"=>$bills,
            "total"=>$total,
            "sale"=>$sale
        ]);        
    }
}
