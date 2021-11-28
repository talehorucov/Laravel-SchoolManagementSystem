<?php

use App\Http\Controllers\Backend\MainController;
use App\Http\Controllers\Backend\Staff\IndexController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'staff',
    'middleware' => 'auth:staff',
    'as' => 'staff.'
], function () {
    Route::get('/', [MainController::class, 'index'])->name('index');
    Route::get('/logout', [MainController::class, 'logout'])->name('logout');
    Route::get('/account', [IndexController::class, 'show'])->name('show');
    Route::get('/account/edit', [IndexController::class, 'edit'])->name('edit');
});

Route::get('/login', [MainController::class, 'loginFrm'])->name('loginFrm');
Route::post('/login', [MainController::class, 'login'])->name('login');
