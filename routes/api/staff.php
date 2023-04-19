<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StaffController;



Route::middleware(['staffAccess', 'auth'])->prefix('staff')->group(function () {

    Route::get('/users', [StaffController::class, 'list_users']);
    Route::get('/brands', [StaffController::class, 'list_brands']);    
    Route::get('/campaigns', [StaffController::class, 'list_campaigns']);
    Route::get('/contents', [StaffController::class, 'list_contents']);

});