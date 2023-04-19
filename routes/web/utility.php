<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UtilityController;

Route::get('/@{username}', [ProfileController::class, 'show_profile']);

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [SiteController::class, 'show_dashboard'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'show_own_profile']);    
    Route::put('/profile', [ProfileController::class, 'update_profile']);    
    Route::put('/profile/password', [ProfileController::class, 'update_password']);    
    Route::put('/profile/picture', [ProfileController::class, 'update_profile_picture']);           

    Route::get('/tickets', [UtilityController::class, 'show_tickets']);
    Route::post('/tickets', [UtilityController::class, 'create_ticket']);
    Route::get('/tickets/{ticket_id}', [UtilityController::class, 'show_ticket']);
    Route::put('/tickets/{ticket_id}', [UtilityController::class, 'update_ticket']); 

    Route::get('/guides', [UtilityController::class, 'show_guides']);
    Route::get('/guides/{guide_id}', [UtilityController::class, 'show_guide']);    

});