<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'show_home']);

Route::get('/about', [SiteController::class, 'static_about']);
Route::get('/brands', [SiteController::class, 'static_brand']);
Route::get('/creators', [SiteController::class, 'static_creator']);
Route::get('/privacy', [SiteController::class, 'static_privacy']);
Route::get('/terms', [SiteController::class, 'static_terms']);