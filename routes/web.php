<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[userController::class,'showHome'])->name('home');
Route::get('/home/{name?}',[userController::class,'showHome']);
Route::get('/properties',[userController::class,'showProperties'])->name('properties');
Route::get('/detail',[userController::class,'showDetail'])->name('detail');
Route::get('/feedback',[userController::class,'Showcontact'])->name('contact');


// Route::resource('/', userController::class);