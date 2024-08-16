<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\NewsletterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;


Route::post('register', [HomeController::class, 'register'])->name('register');
Route::resource('contacts', ContactController::class);
Route::resource('newsletters', NewsletterController::class);
Route::post('/membership-form', [HomeController::class, 'store'])->name('store.member');
Route::post('/membership-step-form', [HomeController::class, 'storeMember'])->name('store.member.step.two');
Route::get('/membership-form', function () {
    $depositor = session('data');
    return view('website.pages.membership-form', compact('depositor'));
})->name('membership-form');

Route::get('/kym-form', function () {
    $depositor = session('data');
    return view('website.pages.kym-form', compact('depositor'));
})->name('kym-form');

Route::post('/kym-step-form', [HomeController::class, 'storeKycDetails'])->name('store.step.kym.form');
Route::match(['get', 'post'], '/{slug}', [HomeController::class, 'slug'])->where('slug', '.*');
