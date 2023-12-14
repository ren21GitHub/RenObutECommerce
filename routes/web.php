<?php

use App\Http\Controllers\Renobutecommerce;
use App\Http\Controllers\RenobutecommerceController;
use App\Http\Controllers\UserController;
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

Route::controller(RenobutecommerceController::class)->group(function(){
    Route::get('/', 'index')/* ->middleware('auth') */;
});

Route::controller(UserController::class)->group(function(){
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('/login/process', 'process');
    Route::post('/logout', 'logout');
    Route::get('/register', 'register');
    Route::post('/store', 'store');
    Route::get('/forgetPassword', 'forgetPass');

    Route::get('/sample', 'sample');
    Route::get('/notFound', 'not_found_page');
    // Route::get('/dashboard', 'dashboard');
    // Route::get('/home', 'home');
});