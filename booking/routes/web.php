<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/account',[AccountController::class,'index'])->name('account.index');

Route::get('/account/create',[AccountController::class,'create'])->name('account.create');

Route::post('account/create/process',[AccountController::class,'store'])->name('account.create.process');

Route::get('/account/{id}',[AccountController::class,'show'])->name('account.show');

Route::get('/account/edit/{id}',[AccountController::class,'edit'])->name('account.edit');

Route::put('/account/update/{id}',[AccountController::class,'update'])->name('account.update');

Route::delete('/account/delete/{id}',[AccountController::class,'destroy'])->name('account.destroy');