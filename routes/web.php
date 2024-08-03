<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('sections.app');
});
Route::resource('contact_us', ContactUsController::class);
// Public Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
// Protected Routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');
    Route::resource('contacts', ContactController::class);
    Route::resource('contact_us', ContactUsController::class);
    // Contact Us Mark As Read
    Route::get('contact_us/mark_as_read/{id}', [ContactUsController::class, 'markAsRead'])->name('contact_us.mark_as_read')->middleware('auth');
    Route::prefix('projects')->name('projects.')->group(function () {
        Route::resource('/project', ProjectController::class);
        Route::get('devops', [ProjectController::class, 'devOps'])->name('devops');
        Route::get('web', [ProjectController::class, 'web'])->name('web');
        Route::get('mobile', [ProjectController::class, 'mobile'])->name('mobile');
        Route::get('graphic', [ProjectController::class, 'graphic'])->name('graphic');
        Route::get('uiux', [ProjectController::class, 'UIUX'])->name('uiux');
        Route::get('testing', [ProjectController::class, 'testing'])->name('testing');
    });
});
