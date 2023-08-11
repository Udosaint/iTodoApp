<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Livewire\Auth\Login;

Route::middleware('guest')->group(function () {

    // using livewire component to render some of the component
    // The pages are being loaded by blade component but any of the part of the page 
    // where any action is being perform is loaded by livewire

    Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
    Route::post('/auth/login', [AuthController::class, 'authenticate'])->name('login');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'store'])->name('register');

    Route::get('/forget-password', [AuthController::class, 'forgetPassword'])->name('forget.password');
    Route::post('/forget-password', [AuthController::class, 'forgetPasswordStore'])->name('forget.password');

    // Pass reset route
    Route::get('/reset-password', [AuthController::class, 'resetPassword'])->name('reset.password');
    Route::post('/reset-password', [AuthController::class, 'resetPasswordStore'])->name('reset.password');

    Route::get('/reset-confirm', [AuthController::class, 'resetConfirm'])->name('reset.confirm');

    // Email verification Routes

    Route::get('/email-verify', [AuthController::class, 'verifyEmail'])->name('email.verify');
    Route::post('/email-verify', [AuthController::class, 'verifyOtp'])->name('email.verify');

    Route::get('/email-confirm', [AuthController::class, 'confirmEmail'])->name('email.confirm');
});
