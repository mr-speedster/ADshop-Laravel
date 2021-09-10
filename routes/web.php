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

Route::get('/',[ADshopController::class,'shop']);

Route::get('/signin',[ADshopController::class,'signin']);

Route::get('/signup',[ADshopController::class,'signup']);

Route::get('/admin',[ADshopController::class,'admin']);

Route::get('/adminpage',[ADshopController::class,'adminPage']);

