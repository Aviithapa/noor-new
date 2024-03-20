<?php

//Route Dashboard

use App\Http\Controllers\Admin\CMS\BannerController;
use App\Http\Controllers\Admin\CMS\ClientController;
use App\Http\Controllers\Admin\CMS\CsrController;
use App\Http\Controllers\Admin\CMS\GalleryController;
use App\Http\Controllers\Admin\CMS\MenuController;
use App\Http\Controllers\Admin\CMS\NewsController;
use App\Http\Controllers\Admin\CMS\PageController;
use App\Http\Controllers\Admin\CMS\PostController;
use App\Http\Controllers\Admin\CMS\ServiceController;
use App\Http\Controllers\Admin\CMS\TeamController;
use App\Http\Controllers\Admin\CMS\TestimonialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::resource('dashboard/user', UserController::class)->middleware(['auth']);

// CMS 
Route::resource('cms/menu', MenuController::class)->middleware(['auth']);
Route::resource('cms/post', PostController::class)->middleware(['auth']);
Route::resource('cms/news', NewsController::class)->middleware(['auth']);
Route::resource('cms/banner', BannerController::class)->middleware(['auth']);
Route::resource('cms/gallery', GalleryController::class)->middleware(['auth']);
Route::resource('cms/testimonial', TestimonialController::class)->middleware(['auth']);
Route::resource('cms/page', PageController::class)->middleware(['auth']);
Route::resource('cms/client', ClientController::class)->middleware(['auth']);
Route::resource('cms/service', ServiceController::class)->middleware(['auth']);
Route::resource('cms/csr', CsrController::class)->middleware(['auth']);
Route::resource('cms/team', TeamController::class)->middleware(['auth']);
