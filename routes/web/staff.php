<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StaffController;



Route::middleware('staffAccess')->prefix('staff')->group(function () {

    Route::get('/users', [StaffController::class, 'list_users']);
    Route::get('/brands', [StaffController::class, 'list_brands']);    
    Route::get('/campaigns', [StaffController::class, 'list_campaigns']);
    Route::get('/contents', [StaffController::class, 'list_contents']);

    Route::get('/brands/{brand_id}/campaigns', [StaffController::class, 'list_brand_campaigns']);
    Route::get('/campaigns/{campaign_id}', [StaffController::class, 'detail_campaign']);
    Route::get('/contents/{content_id}', [StaffController::class, 'detail_content']);

    Route::get('/concierge', [ConciergeController::class, 'dashboard_staff_concierge']);

});