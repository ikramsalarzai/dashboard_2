<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentController;

// auth
Route::get('/', [RegisterController::class, 'index'])->name('login');
Route::post('post-login', [RegisterController::class, 'postLogin'])->name('login.post');
Route::get('registration', [RegisterController::class, 'registration'])->name('register');
Route::post('post-registration', [RegisterController::class, 'postRegistration'])->name('register.post');
Route::get('logout', [RegisterController::class, 'logout'])->name('logout');

Route::get('thank-you', [RegisterController::class, 'thankYou'])->name('thank-you');

// email confirmation
Route::get('/forget-password', function () {
    return view('auth.forget-password');
});
// forget
Route::get('/reset-password', function () {
    return view('auth.reset-password');
});


Route::resource('students', StudentController::class);
