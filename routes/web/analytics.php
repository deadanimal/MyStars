<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AnalyticsController;


Route::middleware('auth')->group(function () {

    Route::get('/analytics', [AnalyticsController::class, 'show_analytics']);

});