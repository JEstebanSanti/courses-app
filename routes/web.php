<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Models\Course;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});



Route::middleware(['auth', 'verified, https'])->group( function() {

    Route::prefix('dashboard')->group(function(){
        Route::get('/', [CourseController::class, 'dashboard'])->name('dashboard');
    });

    Route::prefix('/Courses')->group(function(){
        Route::get('/', [CourseController::class, 'index'])->name('courses.list');
        Route::get('/view/{id}', [CourseController::class, 'view'])->name('courses.view');
        Route::post('/create', [CourseController::class, 'store'])->name('courses.store');
        Route::get('/create', [CourseController::class, 'create'])->name('courses.create');
        Route::post('/subscribe', [CourseController::class, 'subscribe'])->name('courses.subscribe');

    });
});

Route::middleware('auth', 'https')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
