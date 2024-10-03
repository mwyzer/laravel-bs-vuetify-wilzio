<?php

use App\Http\Controllers\API\Auth\ForgotPasswordController;
use App\Http\Controllers\API\Auth\LoginController;
use App\Http\Controllers\API\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/v1/login', [LoginController::class, 'loginAuth'])->name('login.auth');
Route::post('/v1/register', [RegisterController::class, 'registerAuth'])->name('register.auth');
Route::post('/v1/forgot-password', [ForgotPasswordController::class, 'forgotPasswordAuth'])->name('forgot-password.auth');
Route::post('/v1/reset-password/{user}', [ForgotPasswordController::class, 'resetPasswordAuth'])->name('reset-password.auth');
