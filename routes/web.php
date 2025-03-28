<?php

use App\Http\Controllers\FeedController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');

Route::get('/registration', [AuthController::class, 'registration'])->name('registration');
Route::post('/registration', [AuthController::class, 'registrationPost'])->name('registration.post');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', function () {
        return view('feed');
    });
});


Route::get('/feeds',[FeedController::class,'index'])->name('feeds');
Route::get('/feeds/create',[FeedController::class,'create'])->name('feeds.create');
Route::post('/feeds',[FeedController::class,'store'])->name('feeds.store');
Route::get('/feeds/{id}',[FeedController::class,'show'])->name('feeds.show');
Route::get('/feeds/{id}/edit',[FeedController::class,'edit'])->name('feeds.edit');
Route::put('/feeds/{id}',[FeedController::class,'update'])->name('feeds.update');
Route::delete('/feeds/{id}',[FeedController::class,'destroy'])->name('feeds.destroy');



