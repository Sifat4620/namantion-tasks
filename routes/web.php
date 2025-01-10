<?php

use App\Http\Controllers\NominationController;


// Route to display the form
Route::get('/', [NominationController::class, 'showForm'])->name('nomination.form');

// Route to handle form submission
Route::post('/submit-nomination', [NominationController::class, 'submitForm'])->name('nomination.submit');

