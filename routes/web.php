<?php

use App\Http\Controllers\Backend\MainController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'auth',
    // 'middleware' => 'auth',
    'as' => 'auth.'
], function(){
    Route::get('/', [MainController::class, 'index'])->name('index');
});

Route::get('/login', [MainController::class, 'loginFrm'])->name('loginFrm');
Route::post('/login', [MainController::class, 'login'])->name('login');
