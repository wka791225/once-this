<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewController;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [HomeController::class, 'user']);
Route::get('/index',[NewController::class,'index']);
Route::get('/index',[ShoppingCartController::class,'index']);
Route::get('/shop',[ShoppingCartController::class,'stop01']);
Route::get('/shop-2',[ShoppingCartController::class,'stop02']);
Route::get('/shop-3',[ShoppingCartController::class,'stop03']);
Route::get('/shop-4',[ShoppingCartController::class,'stop04']);
// Auth::routes();

