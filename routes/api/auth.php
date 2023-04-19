<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;



Route::post('/token', [SiteController::class, 'create_token']);