<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InforController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\CommentController;
// use App\Http\Controllers\ManagerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('')->group(function () {
    Route::get('',function(){
        return redirect()->route('home');
    });
    Route::get('signin',[AccountController::class,'signin'])->name('signin');
    Route::post('signin',[AccountController::class,'signin'])->name('signin');
    Route::get('signup',[AccountController::class,'signup'])->name('signup');
    Route::post('signup',[AccountController::class,'signup'])->name('signup');
    Route::get('signout',[AccountController::class,'signout'])->name('signout');
    // test thu seesion
    Route::get('set',[AccountController::class,'setSession']);
    Route::get('get',[AccountController::class,'getSession']);
    // return redirect()->route('home');
});
Route::prefix('home')->group(function(){
    Route::get('',[HomeController::class,'homePage'])->name('home');
    Route::get('detail',[HomeController::class,'showDetail'])->name('home.detail');
    Route::get('cart',[HomeController::class,'showCart'])->name('home.cart');
    Route::get('profile',[ProfileController::class,'profile'])->name('profile');
    Route::get('find',[HomeController::class,'find'])->name('home.find');
    Route::post('find',[HomeController::class,'find'])->name('home.find');
    Route::get('order',[HomeController::class,'order'])->name('home.order');
    Route::post('order',[HomeController::class,'order'])->name('home.order');
    Route::post('comment',[CommentController::class,'insert'])->name('home.comment');
});
// Quan ly trang thong tin nguoi dung
Route::prefix('profile')->group(function(){
    Route::get('infor',[ProfileController::class,'inforUser'])->name('profile.infor');
    Route::get('ordering',[ProfileController::class,'ordering'])->name('profile.ordering');
    Route::post('update',[ProfileController::class,'updateInfor'])->name('profile.update');
    Route::get('ordercompeleted',[ProfileController::class,'ordercompeleted'])->name('profile.ordercompeleted');
});
Route::prefix('home/cart')->group(function(){
      Route::get('add',[CartController::class,'add'])->name('cart.add');
      Route::get('delele',[CartController::class,'delete'])->name('cart.delete');
      Route::get('update',[CartController::class,'update'])->name('cart.update');
});
// trang admin
Route::prefix('admin')->group(function(){
    Route::get('',[AdminController::class,'orders'])->name('admin');
    Route::get('users',[AdminController::class,'users'])->name('admin.users');
    Route::get('infors',[AdminController::class,'infors'])->name('admin.infors');
    Route::get('products',[AdminController::class,'products'])->name('admin.products');
    Route::get('categories',[AdminController::class,'categories'])->name('admin.categories');
    Route::get('orders',[AdminController::class,'orders'])->name('admin.orders');
    Route::get('managers',[AdminController::class,'managers'])->name('admin.managers');
    Route::get('bills',[AdminController::class,'orders'])->name('admin.bills');
});
// Hoa don
Route::prefix('admin/bills')->group(function(){
    Route::get('update',[BillController::class,'update'])->name('bills.update');
    Route::get('find',[BillController::class,'find'])->name('bills.find');
    Route::get('findAll',[BillController::class,'findAll'])->name('bills.findAll');
});
// The loai sach
Route::prefix('admin/categories')->group(function(){
    Route::get('update',[CategoryController::class,'update'])->name('categories.update');
    Route::get('insert',[CategoryController::class,'insert'])->name('categories.insert');
    Route::post('insert',[CategoryController::class,'insert'])->name('categories.insert');
    Route::get('delete',[CategoryController::class,'delete'])->name('categories.delete');
    Route::post('update',[CategoryController::class,'update'])->name('categories.update');
});
// Thong tin
Route::prefix('admin/infors')->group(function(){
    Route::get('update',[InforController::class,'update'])->name('infors.update');
    Route::get('insert',[InforController::class,'insert'])->name('infors.insert');
    Route::post('insert',[InforController::class,'insert'])->name('infors.insert');
    // Route::post('delete',[InforController::class,'delete'])->name('infors.delete');
    Route::post('update',[InforController::class,'update'])->name('infors.update');
});
// San pham hien co
Route::prefix('admin/products')->group(function(){
    Route::get('insert',[ProductController::class,'insert'])->name('products.insert');
    Route::post('insert',[ProductController::class,'insert'])->name('products.insert');
    Route::get('update',[ProductController::class,'update'])->name('products.update');
    Route::post('update',[ProductController::class,'update'])->name('products.update');
    Route::get('delete',[ProductController::class,'delete'])->name('products.delete');
});

Route::prefix('admin/managers')->group(function(){
    Route::get('insert',[ManagerController::class,'insert'])->name('managers.insert');
    Route::post('insert',[ManagerController::class,'insert'])->name('managers.insert');
    Route::get('update',[ManagerController::class,'update'])->name('managers.update');
    Route::post('update',[ManagerController::class,'update'])->name('managers.update');
    Route::get('delete',[ManagerController::class,'delete'])->name('managers.delete');
});