<?php

use App\Http\Controllers\Backend\MainController;
use App\Http\Controllers\Backend\Staff\GradeController;
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
        Route::get('/edit/{student:username}', [StudentController::class, 'edit'])->name('student.edit');
        Route::get('/show/{student:username}', [StudentController::class, 'show'])->name('student.show');
        Route::post('/update/{student}', [StudentController::class, 'update'])->name('student.update');
        Route::get('/delete/{student:username}', [StudentController::class, 'destroy'])->name('student.destroy');
    });

    Route::prefix('teacher')->group(function () {
        Route::get('/', [TeacherController::class, 'index'])->name('staff.index');
        Route::get('/create', [TeacherController::class, 'create'])->name('staff.create');
        Route::post('/store', [TeacherController::class, 'store'])->name('staff.store');
        Route::get('/edit/{staff:username}', [TeacherController::class, 'edit'])->name('staff.edit');
        Route::get('/show/{staff:username}', [TeacherController::class, 'show'])->name('staff.show');
        Route::post('/update/{staff}', [TeacherController::class, 'update'])->name('staff.update');
        Route::get('/delete/{staff:username}', [TeacherController::class, 'destroy'])->name('staff.destroy');
    });

    Route::prefix('parent')->group(function () {
        Route::get('/', [ParentController::class, 'index'])->name('parent.index');
        Route::get('/create', [ParentController::class, 'create'])->name('parent.create');
        Route::post('/store', [ParentController::class, 'store'])->name('parent.store');
        Route::get('/edit/{parent:username}', [ParentController::class, 'edit'])->name('parent.edit');
        Route::get('/show/{parent:username}', [ParentController::class, 'show'])->name('parent.show');
        Route::post('/update/{parent:username}', [ParentController::class, 'update'])->name('parent.update');
        Route::get('/delete/{parent:username}', [ParentController::class, 'destroy'])->name('parent.destroy');
    });

    Route::prefix('grade')->group(function () {
        Route::get('/', [GradeController::class, 'index'])->name('grade.index');
        Route::get('/create', [GradeController::class, 'create'])->name('grade.create');
        Route::post('/store', [GradeController::class, 'store'])->name('grade.store');
        Route::get('/edit/{grade}', [GradeController::class, 'edit'])->name('grade.edit');
        Route::get('/show/{grade}', [GradeController::class, 'show'])->name('grade.show');
        Route::post('/update/{grade}', [GradeController::class, 'update'])->name('grade.update');
        Route::get('/delete/{grade}', [GradeController::class, 'destroy'])->name('grade.destroy');
    });

    Route::prefix('subject')->group(function () {
        Route::get('/', [SubjectController::class, 'index'])->name('subject.index');
        Route::get('/create', [SubjectController::class, 'create'])->name('subject.create');
        Route::post('/store', [SubjectController::class, 'store'])->name('subject.store');
        Route::get('/edit/{subject}', [SubjectController::class, 'edit'])->name('subject.edit');
        Route::get('/show/{subject}', [SubjectController::class, 'show'])->name('subject.show');
        Route::post('/update/{subject}', [SubjectController::class, 'update'])->name('subject.update');
        Route::get('/delete/{subject}', [SubjectController::class, 'destroy'])->name('subject.destroy');
    });

    Route::prefix('section')->group(function () {
        Route::get('/', [SectionController::class, 'index'])->name('section.index');
        Route::get('/create', [SectionController::class, 'create'])->name('section.create');
        Route::post('/store', [SectionController::class, 'store'])->name('section.store');
        Route::get('/edit/{section}', [SectionController::class, 'edit'])->name('section.edit');
        Route::get('/show/{section}', [SectionController::class, 'show'])->name('section.show');
        Route::post('/update/{section}', [SectionController::class, 'update'])->name('section.update');
        Route::get('/delete/{section}', [SectionController::class, 'destroy'])->name('section.destroy');
    });    

    Route::prefix('section')->group(function () {
        Route::get('/', [SectionController::class, 'index'])->name('section.index');
        Route::get('/create', [SectionController::class, 'create'])->name('section.create');
        Route::post('/store', [SectionController::class, 'store'])->name('section.store');
        Route::get('/edit/{section}', [SectionController::class, 'edit'])->name('section.edit');
        Route::get('/show/{section}', [SectionController::class, 'show'])->name('section.show');
        Route::post('/update/{section}', [SectionController::class, 'update'])->name('section.update');
        Route::get('/delete/{section}', [SectionController::class, 'destroy'])->name('section.destroy');
    });
});

Route::get('/login', [MainController::class, 'loginFrm'])->name('loginFrm');
Route::post('/login', [MainController::class, 'login'])->name('login');
