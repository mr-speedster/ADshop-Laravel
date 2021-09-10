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

Route::post('/user/data',[ADshopController::class,'userData'])->name('userform');

Route::get('/admin',[ADshopController::class,'admin'])->name('adminSignin');

Route::get('/admin/adminpage',[ADshopController::class,'adminPage']);

