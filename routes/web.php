<?php

use App\Http\Controllers\Backend\MainController;
use App\Http\Controllers\Backend\Staff\ClassController;
use App\Http\Controllers\Backend\Staff\IndexController;
use App\Http\Controllers\Backend\Staff\ParentController;
use App\Http\Controllers\Backend\Staff\SectionController;
use App\Http\Controllers\Backend\Staff\StudentController;
use App\Http\Controllers\Backend\Staff\SubjectController;
use App\Http\Controllers\Backend\Staff\TeacherController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'staff',
    'middleware' => 'auth:staff',
    'as' => 'staff.'
], function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/logout', [MainController::class, 'logout'])->name('logout');

    Route::prefix('account')->group(function () {
        Route::get('/{staff}', [IndexController::class, 'show'])->name('account.show');
        Route::get('/edit/{staff}', [IndexController::class, 'edit'])->name('account.edit');
        Route::post('/update/{staff}', [IndexController::class, 'update'])->name('account.update');
    });

    Route::prefix('student')->group(function () {
        Route::get('/', [StudentController::class, 'index'])->name('student.index');
        Route::get('/create', [StudentController::class, 'create'])->name('student.create');
        Route::post('/store', [StudentController::class, 'store'])->name('student.store');
    });

    Route::prefix('teacher')->group(function () {
        Route::get('/', [TeacherController::class, 'index'])->name('teacher.index');
        Route::get('/create', [TeacherController::class, 'create'])->name('teacher.create');
    });

    Route::prefix('parent')->group(function () {
        Route::get('/', [ParentController::class, 'index'])->name('parent.index');
        Route::get('/create', [ParentController::class, 'create'])->name('parent.create');
        Route::post('/store', [ParentController::class, 'store'])->name('parent.store');
    });

    Route::prefix('class')->group(function () {
        Route::get('/', [ClassController::class, 'index'])->name('class.index');
        Route::get('/create', [ClassController::class, 'create'])->name('class.create');
        Route::post('/store', [ClassController::class, 'store'])->name('class.store');
    });

    Route::prefix('subject')->group(function () {
        Route::get('/', [SubjectController::class, 'index'])->name('subject.index');
        Route::get('/create', [SubjectController::class, 'create'])->name('subject.create');
        Route::post('/store', [SubjectController::class, 'store'])->name('subject.store');
    });

    Route::prefix('section')->group(function () {
        Route::get('/', [SectionController::class, 'index'])->name('section.index');
        Route::get('/create', [SectionController::class, 'create'])->name('section.create');
        Route::post('/store', [SectionController::class, 'store'])->name('section.store');
    });
});

Route::get('/login', [MainController::class, 'loginFrm'])->name('loginFrm');
Route::post('/login', [MainController::class, 'login'])->name('login');
