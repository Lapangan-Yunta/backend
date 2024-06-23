<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\frontend\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/',[FrontendController::class,'home'])->name('home');

Route::get('/detail',[FrontendController::class,'detail'])->name('detail');

Route::get('/payment',[FrontendController::class,'payment'])->name('payment');

Route::get('/schedule',[FrontendController::class,'schedule'])->name('schedule');

Route::get('/venue',[FrontendController::class,'venue'])->name('venue');

Route::get('/confirm-booking',[FrontendController::class,'confirm'])->name('confirm');


//authentication

Route::get('/login',[AuthController::class,'login'])->name('login');

Route::get('/register',[AuthController::class,'register'])->name('register');


Route::prefix('admin')->group(function(){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    //account
    Route::get('/account',[AccountController::class,'index'])->name('account.index');

    Route::get('/account/create',[AccountController::class,'create'])->name('account.create');

    Route::post('account/create/process',[AccountController::class,'store'])->name('account.create.process');

    Route::get('/account/{id}',[AccountController::class,'show'])->name('account.show');

    Route::get('/account/edit/{id}',[AccountController::class,'edit'])->name('account.edit');

    Route::put('/account/update/{id}',[AccountController::class,'update'])->name('account.update');

    Route::delete('/account/delete/{id}',[AccountController::class,'destroy'])->name('account.destroy');
});
