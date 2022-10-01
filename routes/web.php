<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\displayController;
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

//home
Route::get('/',[displayController::class,'index']);

//login
Route::get('/userslogin',[displayController::class,'userslogin'])->name('userslogin');
Route::get('/shopslogin',[displayController::class,'shopslogin'])->name('shopslogin');

//users
Route::get('/users',[usersController::class,'users'])->name('users');
Route::post('/users',[usersController::class,'usersrequest']);

Route::get('/appointment',[usersController::class,'appointment'])->name('appointment');
Route::post('/appointment',[usersController::class,'appointmentrequest']);
Route::get('/apoconf',[usersController::class,'apoconf'])->name('apoconf');
Route::post('/apoconf',[usersController::class,'apoconfirm']);

//shop
// main
Route::get('/shops',[shopController::class,'shops'])->name('shops');
Route::post('/shops',[shopController::class,'shopssend']);
// info
Route::get('/shopsinfo',[shopController::class,'shopsinfo'])->name('shopsinfo');
Route::post('/shopsinfo',[shopController::class,'shopsinfosend']);

//staff
// main
Route::get('/staffs',[staffController::class,'staffs'])->name('staffs');
Route::post('/staffs',[staffController::class,'staffssend']);
// info
Route::get('/staffsinfo',[staffController::class,'staffsinfo'])->name('staffinfo');
Route::post('/staffsinfo',[staffController::class,'staffsinfosend']);

