<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\DetailRulesController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\RulesController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\LapanganController;
use App\Http\Controllers\Backend\ScheduleController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/',[FrontendController::class,'home'])->name('home');

Route::get('/detail/{title}',[FrontendController::class,'detail'])->name('detail');

Route::get('/payment',[FrontendController::class,'payment'])->name('payment');

Route::get('/jadwal', [ScheduleController::class, 'index'])->name('jadwal.index')->middleware('auth');

Route::get('/venue',[FrontendController::class,'venue'])->name('venue');

Route::get('/confirm-booking',[FrontendController::class,'confirm'])->name('confirm');

Route::post('/booking',[BookingController::class,'booking'])->name('booking.process');

Route::get('/booking/detail/{random_url}/{id}',[BookingController::class,'booking_details'])->name('booking.details');

Route::post('/booking/detail/process',[BookingController::class,'booking_details_process'])->name('booking.details.process');

Route::get('/cart',[FrontendController::class,'cart'])->name('cart');



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
    Route::get('/history',[UserDashboardController::class,'user_history'])->name('user.history');
    Route::get('/profile',[UserDashboardController::class,'user_profile'])->name('user.profile');
    Route::put('/edit-profile/{id}', [UserDashboardController::class, 'edit_profile'])->name('user.edit.profile');


    Route::post('/schedule', [BookingController::class, 'schedule']);
    Route::get('/cart', [BookingController::class, 'viewCart'])->name('user.cart');
    Route::post('/booking/submit/{id}', [BookingController::class, 'submitBooking'])->name('booking.submit');

    Route::post('/add-to-cart', [BookingController::class, 'addToCart'])->name('user.add.cart');
    Route::post('/remove-from-cart', [BookingController::class, 'removeFromCart'])->name('user.remove.cart');
    Route::get('/cart/count', 'DashboardController@getCartCount')->name('user.cart.count');
});

Route::prefix('admin')->middleware('auth','checkrole:admin')->group(function(){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::get('/lapangan', [LapanganController::class, 'index'])->name('lapangan.index');

    Route::get('/lapangan/create', [LapanganController::class, 'create'])->name('lapangan.create');

    Route::post('/lapangan/create/process', [LapanganController::class, 'store'])->name('lapangan.store');

    Route::get('/lapangan/{id}', [LapanganController::class, 'show'])->name('lapangan.show');

    Route::get('/lapangan/edit/{id}', [LapanganController::class, 'edit'])->name('lapangan.edit');

    Route::put('/lapangan/update/{id}', [LapanganController::class, 'update'])->name('lapangan.update');

    Route::delete('/lapangan/delete/{id}', [LapanganController::class, 'destroy'])->name('lapangan.destroy');

    Route::get('/booking',[BookingController::class,'index'])->name('booking.index');
    Route::get('/booking/detail/{id}',[BookingController::class,'show'])->name('booking.detail');
    Route::get('/booking/edit/{id}',[BookingController::class,'edit'])->name('booking.edit');
    Route::put('/booking/update/{id}',[BookingController::class,'update'])->name('booking.update');

    Route::get('/gallery/{title}', [GalleryController::class, 'index'])->name('gallery.index');
    Route::post('/gallery/process', [GalleryController::class, 'store'])->name('gallery.process');

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

    //account
    Route::get('/account',[AccountController::class,'index'])->name('account.index');

    Route::get('/account/create',[AccountController::class,'create'])->name('account.create');

    Route::post('account/create/process',[AccountController::class,'store'])->name('account.create.process');

    Route::get('/account/{id}',[AccountController::class,'show'])->name('account.show');

    Route::get('/account/edit/{id}',[AccountController::class,'edit'])->name('account.edit');

    Route::put('/account/update/{id}',[AccountController::class,'update'])->name('account.update');

    Route::delete('/account/delete/{id}',[AccountController::class,'destroy'])->name('account.destroy');
});