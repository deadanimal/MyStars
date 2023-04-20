<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CampaignController;


Route::middleware('auth')->group(function () {

    Route::get('/campaigns', [CampaignController::class, 'list_campaigns']);
    Route::get('/campaigns/create', [CampaignController::class, 'viewform_campaign']);
    Route::get('/campaigns/{campaign_id}', [CampaignController::class, 'detail_campaign']);      
    Route::post('/campaigns', [CampaignController::class, 'create_campaign']);

});