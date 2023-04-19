<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;



Route::middleware(['adminAccess', 'auth'])->prefix('admin')->group(function () {

    Route::get('/brands', [AdminController::class, 'list_brands']);
    Route::get('/campaigns', [AdminController::class, 'list_campaigns']);
    Route::get('/contents', [AdminController::class, 'list_contents']);
    
    Route::get('/users', [AdminController::class, 'list_users']);
    Route::get('/users/{user_id}', [AdminController::class, 'detail_user']);
    Route::put('/users/{user_id}', [AdminController::class, 'update_user']);

});
