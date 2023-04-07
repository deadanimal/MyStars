<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CampaignController;


Route::middleware('auth')->group(function () {

    Route::get('/campaigns', [CampaignController::class, 'show_campaigns']);
    Route::get('/campaigns/create', [CampaignController::class, 'show_create_campaign']);
    Route::get('/campaigns/{campaign_id}', [CampaignController::class, 'show_campaign']);      
    Route::post('/campaigns', [CampaignController::class, 'create_campaign']);

});