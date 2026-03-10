<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login',[AuthController::class,'showLogin'])->name('login');
Route::post('/login',[AuthController::class,'login']);

Route::get('/register',[AuthController::class,'showRegister'])->name('register');
Route::post('/register',[AuthController::class,'register']);

Route::post('/logout',[AuthController::class,'logout'])->name('logout');

Route::middleware('auth')->group(function(){

    Route::get('/dashboard', fn() => view('pages.dashboard.index'));

    Route::prefix('users')->name('users')->group(function(){
        Route::get('/', fn() => view('index'));
    });

    Route::get('/reports', fn() => view('pages.reports.index'));

    Route::get('/settings', fn() => view('pages.settings.index'));

});
