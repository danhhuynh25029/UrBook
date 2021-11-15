<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
// Dieu huong tranh chu
Route::prefix('/')->group(function(){
    Route::get('/home',[HomeController::class,'homePage']);
    Route::get('/user',[HomeController::class,'userInfor']);
});
// dieu huong trang admin
Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'all'])->name('admin');
    Route::get('/orders',[AdminController::class,'getOrder'])->name('admin.orders');
    Route::get('/users',[AdminController::class,'getUser'])->name('admin.users');
    Route::get('/members',[AdminController::class,'getMember'])->name('admin.members');
    Route::get('/products',[AdminController::class,'getProduct'])->name('admin.products');
    Route::get('/categories',[AdminController::class,'getCategory'])->name('admin.categories');
});
// Route::prefix('user')->group(function(){
//     Route::get('/',[])
// });