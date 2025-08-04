<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');