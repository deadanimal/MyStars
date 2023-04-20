<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConciergeController;


Route::middleware('auth')->group(function () {

    Route::get('/concierge', [ConciergeController::class, 'dashboard_concierge']);

});