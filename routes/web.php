<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\Product;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function(){
    return view('about');
});


Route::get('/contact', function(){
    return view('contact');
});


Route::get('/users',[Users::class, 'index']);

//form
Route::post('/users-data',[Users::class,'getData']);
Route::view("login", 'user-login');

Route::get('/products',[Product::class, 'productList']);