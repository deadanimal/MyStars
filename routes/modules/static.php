<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'show_home']);
Route::get('/creator', [SiteController::class, 'show_creator']);

Route::get('/support', [SiteController::class, 'show_support']);
Route::get('/privacy', [SiteController::class, 'show_privacy']);
Route::get('/terms', [SiteController::class, 'show_terms']);
Route::get('/afeezaziz', [SiteController::class, 'show_afeezaziz']);
Route::get('/rewards', [SiteController::class, 'show_rewards']);
Route::get('/services', [SiteController::class, 'show_services']);
Route::get('/case-studies', [SiteController::class, 'show_case_studies']);