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
    Route::get('/', 'index');

});

Route::controller(UserController::class)->group(function(){
    Route::get('/login', 'login');
    Route::get('/register', 'register');
    Route::get('/forgetPassword', 'forgetPass');

    Route::get('/sample', 'sample');
});