<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LocaleController;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');

Route::get('/set-locale/{locale}', [LocaleController::class, 'setLocale'])->name('set-locale');
Route::view('/booking', 'booking')->name('booking');