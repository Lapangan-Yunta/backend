<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\DetailRulesController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\RulesController;
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


// Route Fasilitas 
Route::get('/fasilitas',[FasilitasController::class,'index'])->name('fasilitas.index');

Route::get('/fasilitas/create',[FasilitasController::class,'create'])->name('fasilitas.create');

Route::post('/fasilitas/create/process',[FasilitasController::class,'store'])->name('fasilitas.store');

Route::get('/fasilitas/{id}', [FasilitasController::class,'show'])->name('fasilitas.show');

Route::get('/fasilitas/edit/{id}',[FasilitasController::class,'edit'])->name('fasilitas.edit');

Route::put('/fasilitas/update/{id}',[FasilitasController::class,'update'])->name('fasilitas.update');

Route::delete('/fasilitas/delete/{id}', [FasilitasController::class,'destroy'])->name('fasilitas.destroy');


//Rules

Route::get('/rules',[RulesController::class,'index'])->name('rules.index');

Route::get('/rules/create',[RulesController::class,'create'])->name('rules.create');

Route::post('/rules/create/process',[RulesController::class,'store'])->name('rules.store');

Route::get('/rules/{id}', [RulesController::class,'show'])->name('rules.show');

Route::get('/rules/edit/{id}',[RulesController::class,'edit'])->name('rules.edit');

Route::put('/rules/update/{id}',[RulesController::class,'update'])->name('rules.update');

Route::delete('/rules/delete/{id}', [RulesController::class,'destroy'])->name('rules.destroy');



