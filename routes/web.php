<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;


Route::get('/',[ProfileController::class,'index'])->name('profile.index');
Route::get('/gallery',[ProfileController::class,'gallery'])->name('profile.gallery');
Route::get('/videos',[ProfileController::class,'videos'])->name('profile.vidoes');
Route::get('/sendme',[ProfileController::class,'sendme'])->name('profile.sendme');
Route::post('/sendme',[ProfileController::class,'getMessage'])->name('profile.message');
Route::get('/thankYou',[ProfileController::class,'thankyou'])->name('profile.thanks');
Route::get('/messages',[ProfileController::class,'messageView'])->name('profile.messagePage')->middleware('auth');

Route::get('/Upload',[ProfileController::class,'upload'])->name('profile.upload')->middleware('auth');
Route::post('/Upload',[ProfileController::class,'store'])->name('profile.store');


//Auth

Route::get('/login',[AuthController::class,'view'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('Auth.login');
Route::get('/logout',[AuthController::class,'logout']);



