<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\ContentController;

Route::get('/', function () {
    return view('welcome');
});

Route::stripeWebhooks('stripe-webhook');

Route::get('/privacy', [SiteController::class, 'show_privacy']);
Route::get('/terms', [SiteController::class, 'show_terms']);


Route::middleware('auth')->group(function () {
    
    Route::get('/dashboard', [SiteController::class, 'show_dashboard']);

    Route::get('/tickets', [SiteController::class, 'show_tickets']);
    Route::post('/tickets', [SiteController::class, 'create_ticket']);
    Route::get('/tickets/{ticket_id}', [SiteController::class, 'show_ticket']);
    Route::put('/tickets/{ticket_id}', [SiteController::class, 'update_ticket']);    

    Route::get('/campaigns', [CampaignController::class, 'show_campaigns']);
    Route::get('/campaigns/{campaign_id}', [CampaignController::class, 'show_campaign']);
    Route::put('/campaigns/{campaign_id}', [CampaignController::class, 'update_campaign']);

    Route::get('/contents', [ContentController::class, 'show_contents']);
    Route::get('/contents/{content_id}', [ContentController::class, 'show_content']);
    Route::put('/contents/{content_id}', [ContentController::class, 'update_content']);    

});
