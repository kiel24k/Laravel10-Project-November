<?php

use App\Http\Controllers\user\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/index',[UserController::class,'UserIndex']);
Route::get('user/signup',[UserController::class,'UserSignup'])->name('user.signup');
Route::get('user/login',[UserController::class,'UserLogin'])->name('user.login');
Route::get('user/section/product',[UserController::class,'UserSection'])->name('user.section');
