<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItodoController;
use App\Http\Controllers\UserController;

Route::middleware('guest')->group(function () {

    Route::get('/dashboard', [ItodoController::class, 'dashboard'])->name('user.dashboard');

    Route::get('/inbox', [ItodoController::class, 'inbox'])->name('user.inbox');
    Route::get('/today', [ItodoController::class, 'today'])->name('user.today');

    Route::get('/create-task', [ItodoController::class, 'createTask'])->name('user.createtask');
    Route::post('/create-task', [ItodoController::class, 'storeTask'])->name('user.createtask');

    Route::get('/create-folder', [ItodoController::class, 'createfolder'])->name('user.createfolder');
    Route::post('/create-folder', [ItodoController::class, 'storefolder'])->name('user.createfolder');

    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('/settings', [UserController::class, 'settings'])->name('user.settings');
});
