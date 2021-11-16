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
        return view('admin/orders',['content'=>'Danh sach hoa don']);
    }
    public function getProduct(){
        // danh sach cac san pham hien co tai shop
        return view('admin/products',['content'=>'Danh sach san pham']);
    }
    public function getUser(){
        // noi chua cac khac hang da dat mua o trang web
        return view('admin/users',['content'=>'Danh sach khach hang']);
    }
    public function getMember(){
        // nhan vien de theo don hang
        return view('admin/members',['content'=>'Danh sach nhan vien truc page']);
    }
    public function getCategory(){
        // muc dinh tao them neu co the laoi sach moi
        return view('admin/categories',['content'=>'Danh sach the loai sach']);
    }
    public function getInfor(){
        return view('admin/infors',['content'=>'Cap nhat thong tin shop tren website']);
    }
    public function getCode(){
        return view('admin/code',['content'=>'Danh sach ma giam gia']);
    }
}
