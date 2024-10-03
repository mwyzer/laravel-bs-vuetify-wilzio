<?php

use App\Http\Controllers\API\Auth\ForgotPasswordController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reset-password/{user}', [ForgotPasswordController::class, 'showResetPasswordPage'])->name('password.reset');

Route::get('/{pathMatch}', function () {
    return view('welcome');
})->where('pathMatch', ".*");
