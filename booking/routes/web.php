<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/',[FrontendController::class,'home'])->name('home');

Route::get('/detail',[FrontendController::class,'detail'])->name('detail');

Route::get('/payment',[FrontendController::class,'payment'])->name('payment');

Route::get('/schedule',[FrontendController::class,'schedule'])->name('schedule');

Route::get('/venue',[FrontendController::class,'venue'])->name('venue');

Route::get('/confirm-booking',[FrontendController::class,'confirm'])->name('confirm');


//authentication

Route::get('/login',[AuthController::class,'login'])->name('login');

Route::post('/login/process',[AuthController::class,'login_process'])->name('login.process');


Route::get('/register',[AuthController::class,'register'])->name('register');

Route::post('/register/process',[AuthController::class,'register_process'])->name('register.process');

Route::get('/verify/{phone}/{random_url}',[AuthController::class,'verify'])->name('verify');

Route::post('/verify/process',[AuthController::class,'verify_process'])->name('verify.process');

Route::post('/resend/otp',[AuthController::class,'resend'])->name('resend');

Route::prefix('user')->middleware('auth','checkrole:user')->group(function() {
    Route::get('/dashboard',[UserDashboardController::class,'index'])->name('user.dashboard');
});

Route::prefix('admin')->middleware('auth','checkrole:admin')->group(function(){
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
