<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InforController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AccountController;
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
    // return redirect()->route('home');
});
Route::prefix('home')->group(function(){
    Route::get('',[HomeController::class,'homePage'])->name('home');
    Route::get('detail',[HomeController::class,'showDetail'])->name('home.detail');
});
Route::prefix('admin')->group(function(){
    Route::get('',[AdminController::class,'all'])->name('admin');
    Route::get('users',[AdminController::class,'users'])->name('admin.users');
    Route::get('infors',[AdminController::class,'infors'])->name('admin.infors');
    Route::get('products',[AdminController::class,'products'])->name('admin.products');
    Route::get('categories',[AdminController::class,'categories'])->name('admin.categories');
    Route::get('orders',[AdminController::class,'orders'])->name('admin.orders');
});
Route::prefix('admin/categories')->group(function(){
    Route::get('update',[CategoryController::class,'update'])->name('categories.update');
    Route::get('insert',[CategoryController::class,'insert'])->name('categories.insert');
    Route::post('insert',[CategoryController::class,'insert'])->name('categories.insert');
    Route::get('delete',[CategoryController::class,'delete'])->name('categories.delete');
    Route::post('update',[CategoryController::class,'update'])->name('categories.update');
});
Route::prefix('admin/infors')->group(function(){
    Route::get('update',[InforController::class,'update'])->name('infors.update');
    Route::get('insert',[InforController::class,'insert'])->name('infors.insert');
    Route::post('insert',[InforController::class,'insert'])->name('infors.insert');
    // Route::post('delete',[InforController::class,'delete'])->name('infors.delete');
    Route::post('update',[InforController::class,'update'])->name('infors.update');
});
Route::prefix('admin/products')->group(function(){
    Route::get('insert',[ProductController::class,'insert'])->name('products.insert');
    Route::post('insert',[ProductController::class,'insert'])->name('products.insert');
    Route::get('update',[ProductController::class,'update'])->name('products.update');
    Route::post('update',[ProductController::class,'update'])->name('products.update');
    Route::get('delete',[ProductController::class,'delete'])->name('products.delete');
});

