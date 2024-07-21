<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\authentications\ForgotPasswordBasic;
// Main Page Route
Route::middleware('auth')->group(function () {
  Route::get('/', [Analytics::class, 'index'])->name('dashboard-analytics');
});

// authentication
Route::get('/auth/login', [LoginBasic::class, 'index'])->name('login');
Route::post('/validate-login', [LoginBasic::class, 'validate_login'])->name('validate-login');
Route::get('/auth/logout', [LoginBasic::class, 'logout'])->name('logout');

Route::get('/auth/register-basic', [RegisterBasic::class, 'index'])->name('auth-register-basic');
Route::get('/auth/forgot-password-basic', [ForgotPasswordBasic::class, 'index'])->name('auth-reset-password-basic');
