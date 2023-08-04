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

Route::view('/no-access','no-access');

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
// Route::view("login", 'user-login');



Route::group(['middleware'=>'protectedPage'], function(){
    Route::view('/home', 'home');
    Route::get('/products',[Product::class, 'productList']);
}
);

Route::get('db-users', [Users::class, 'getDataFromDB']);
// Route::get('users-api', [Users::class, 'getDataFromAPI']);

Route::post('user-login', [Users::class, 'loginUser']);

Route::view('profile', 'profile');


Route::get('/login', function(){
    if(session()->has('username')){
        return redirect('profile');
    }else{

        return view('login');
    }

});

Route::get('/logout', function(){
    if(session()->has('username')){
        session()->pull('username');
    }

    return redirect('login');
});