<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProfileController;



Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [SiteController::class, 'show_dashboard']);

    Route::get('/profile', [ProfileController::class, 'show_profile']);    
    Route::put('/profile', [ProfileController::class, 'update_profile']);    
    Route::put('/profile/password', [ProfileController::class, 'update_password']);    
    Route::put('/profile/picture', [ProfileController::class, 'update_profile_picture']);           

    Route::get('/tickets', [SiteController::class, 'show_tickets']);
    Route::post('/tickets', [SiteController::class, 'create_ticket']);
    Route::get('/tickets/{ticket_id}', [SiteController::class, 'show_ticket']);
    Route::put('/tickets/{ticket_id}', [SiteController::class, 'update_ticket']); 

    Route::get('/guides', [SiteController::class, 'show_guides']);
    Route::get('/guides/{guide_id}', [SiteController::class, 'show_guide']);

    Route::get('/@{username}', [ProfileController::class, 'show_username']);

});