<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\EmailVerificationController;

Route::resource('login', LoginController::class)->only(['store', 'create']);
Route::resource('register', RegisterController::class)->only(['store', 'create']);
Route::resource('email-verification', EmailVerificationController::class)->only(['store', 'create']);
Route::post('verify-email', [EmailVerificationController::class, 'verify'])->name('verification.verify');
