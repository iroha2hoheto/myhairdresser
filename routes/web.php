<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\displayController;
use App\Http\Controllers\appointmentController;
use App\Http\Controllers\staffController;
use App\Http\Controllers\shopController;
use App\Http\Controllers\usersController;
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

// //home
// Route::get('/',[displayController::class,'index']);

// //login
// Route::get('/',[displayController::class,'index']);

// //users
// Route::get('/',[usersController::class,'index']);
Route::get('/',[usersController::class,'index']);

// // //shop
// Route::get('/',[shopController::class,'index']);
// Route::get('/',[shopController::class,'index']);

// //staff
// Route::get('/',[staffController::class,'index']);
// Route::get('/',[staffController::class,'index']);

