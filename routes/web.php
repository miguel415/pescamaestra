<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\allController;
use App\Http\Controllers\VerificationController;
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/wiki', function () {
    return view('wiki');
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});
Route::get('/techniques', function () {
    return view('techniques');
});
Route::get('/equipment', function () {
    return view('equipment');
});
Route::get('/conservation', function () {
    return view('conservation');
});
Route::get('/experiences', function () {
    return view('experiences');
});
Route::get('/history', function () {
    return view('history');
});
Route::get('/tournaments', function () {
    return view('tournaments');
});
Route::get('/trends', function () {
    return view('trends');
});
Route::get('/regulations', function () {
    return view('regulations');
});
Route::get('/categories', [allController::class, 'showCategories'])->name('categories.show');

Route::get('/courses/{idcurso}', [allController::class, 'showCourse'])->name('courses.show');

Route::view('/login', "login")->name('login');
Route::view('/register', "register")->name('register');

Route::get('/forgot-password', [loginController::class, 'forgot_password'])->name('password.request');
Route::post('/forgot-password', [loginController::class, 'sendEmail_password'])->name('password.email');
Route::get('/reset-password/{token}', [loginController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [loginController::class, 'reset_password'])->name('password.update');



Route::post('/validar-registro', [loginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [loginController::class, 'login'])->name('inicia-sesion');
Route::get('/logout', [loginController::class, 'logout'])->name('logout');
Route::middleware('auth')->group(function () {
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verification'])->middleware(['auth', 'signed'])->name('verification.verify');
    Route::post('/email/verification-notification', [VerificationController::class, 'sendEmail'])->middleware(['auth'])->name('verification.send');
});


Route::middleware('auth')->group(function () {
    // Aquí van tus rutas protegidas
    Route::get('/courses', function () {
        return view('courses');
    })->name('courses');
});

Route::get('/logout', [loginController::class, 'destroy'])
    ->name('logout');

