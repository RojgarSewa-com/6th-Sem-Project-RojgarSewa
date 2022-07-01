<?php

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

Route::group([], function (){
    Route::get('/', [\App\Http\Controllers\Front\FrontController::class,'home'])->name('home');
    Route::get('login', [\App\Http\Controllers\Front\FrontController::class,'login'])->name('login');
    Route::get('user-login', [\App\Http\Controllers\Front\FrontController::class,'userLogin'])->name('user-login');
    Route::get('provider-login', [\App\Http\Controllers\Front\FrontController::class,'providerLogin'])->name('provider-login');
    Route::get('register', [\App\Http\Controllers\Front\FrontController::class,'register'])->name('register');
    Route::get('user-register', [\App\Http\Controllers\Front\FrontController::class,'userRegister'])->name('user-register');
    Route::get('provider-register', [\App\Http\Controllers\Front\FrontController::class,'providerRegister'])->name('provider-register');

    /*
     * Other routes here
     */

});
