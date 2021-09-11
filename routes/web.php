<?php

use App\Http\Controllers\ADshopController;
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

Route::get('/',[ADshopController::class,'shop'])->name('shop');



Route::get('/user/signup',[ADshopController::class,'signup'])->name('signup');

Route::get('/user/signin',[ADshopController::class,'signin'])->name('signin');




Route::post('/user/signup/data',[ADshopController::class,'userSignup'])->name('usersignup');

Route::post('/user/signin/data',[ADshopController::class,'userSignin'])->name('usersignin');




Route::get('/admin',[ADshopController::class,'admin'])->name('adminSignin');

Route::post('/admin/data',[ADshopController::class,'adminLogin'])->name('adminLogin');


Route::get('/admin/adminpage',[ADshopController::class,'adminPage'])->name('adminHome');

Route::post('/admin/product',[ADshopController::class,'product'])->name('product');









Route::get('/signout',function(){
    if (session()->has('user_email')) {
        session()->pull('user_email');
    }
    return redirect('/');
})->name('signout');