<?php

use App\Http\Controllers\NominationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;


// Show login form
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

// Handle login submission
Route::post('login', [LoginController::class, 'login']);
// Route to display the form - accessible only to authenticated users
Route::get('/', [NominationController::class, 'showForm'])->name('nomination.form')->middleware('auth');

// Route to handle form submission - accessible only to authenticated users
Route::post('/submit-nomination', [NominationController::class, 'submitForm'])->name('nomination.submit')->middleware('auth');
