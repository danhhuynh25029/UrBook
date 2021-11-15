<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){

    }
    public function all(){
        // return "lan dau vao trang admin";
        return view('admin/admin');
    }
    public function getOrder(){
        // Danh sach cac hoa don
        return view('admin/content',['content'=>'Danh sach hoa don']);
    }
    public function getProduct(){
        // danh sach cac san pham hien co tai shop
        return "Danh sach san pham";
    }
    public function getUser(){
        // noi chua cac khac hang da dat mua o trang web
        return "Danh sach khach hang";
    }
    public function getMember(){
        // nhan vien de theo don hang
        return "Danh sach nhan vien truc page";
    }
    public function getCategory(){
        // muc dinh tao them neu co the laoi sach moi
        return "Danh sach the loai sach";
    }
}
