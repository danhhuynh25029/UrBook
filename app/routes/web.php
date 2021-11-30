<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('home')->group(function(){
    Route::get('',[HomeController::class,'homePage'])->name('home');
});
Route::get('signin',[HomeController::class,'signin'])->name('signin');
Route::get('signup',[HomeController::class,'signup'])->name('signup');

Route::prefix('admin')->group(function(){
    Route::get('',[AdminController::class,'all'])->name('admin');
    Route::get('members',[AdminController::class,'members'])->name('admin.members');
    Route::get('infors',[AdminController::class,'infors'])->name('admin.infors');
    Route::get('products',[AdminController::class,'products'])->name('admin.products');
    Route::get('categories',[AdminController::class,'products'])->name('admin.categories');
    Route::get('orders',[AdminController::class,'orders'])->name('admin.orders');
});
