<?php

use App\Http\Controllers\Custom\LoginController;
use App\Http\Controllers\Custom\RegisterController;
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

Route::view('/home','home');
// Auth::routes();

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'validateData']);
Route::post('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/verify',[LoginController::class,'verifyUser'])->name('verify');

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

Route::post('/verify/resend',[LoginController::class,'resend'])->name('verification.resend');
// Route::get('/register',[])

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
