<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItodoController;
use App\Http\Controllers\UserController;

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', [ItodoController::class, 'dashboard'])->name('user.dashboard');

    Route::get('/inbox', [ItodoController::class, 'inbox'])->name('user.inbox');
    Route::get('/today', [ItodoController::class, 'today'])->name('user.today');

    Route::get('/create-task', [ItodoController::class, 'createTask'])->name('user.createtask');
    Route::post('/create-task', [ItodoController::class, 'storeTask'])->name('user.createtask');

    Route::get('/edit-task', [ItodoController::class, 'editTask'])->name('user.edittask');

    // show a folder and the list of task in it
    Route::get('/folder', [ItodoController::class, 'folder'])->name('user.folder');

    // show all folder
    Route::get('/folders', [ItodoController::class, 'folders'])->name('user.folders');
    Route::get('/create-folder', [ItodoController::class, 'createfolder'])->name('user.createfolder');
    Route::post('/create-folder', [ItodoController::class, 'storefolder'])->name('user.createfolder');

    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('/settings', [UserController::class, 'settings'])->name('user.settings');

    Route::post('/logout', [UserController::class, 'userLogout'])->name('user.logout');
});
