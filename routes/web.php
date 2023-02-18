<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\EarningController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WalletController;

Route::get('/', [SiteController::class, 'show_home']);
Route::get('/creator', [SiteController::class, 'show_creator']);

Route::stripeWebhooks('stripe-webhook');

Route::get('/support', [SiteController::class, 'show_support']);
Route::get('/privacy', [SiteController::class, 'show_privacy']);
Route::get('/terms', [SiteController::class, 'show_terms']);
Route::get('/afeezaziz', [SiteController::class, 'show_afeezaziz']);
Route::get('/rewards', [SiteController::class, 'show_rewards']);
Route::get('/services', [SiteController::class, 'show_services']);
Route::get('/case-studies', [SiteController::class, 'show_case_studies']);

Route::get('/guides', [SiteController::class, 'show_guides']);
Route::get('/guides/{guide_id}', [SiteController::class, 'show_guide']);

Route::get('/@{username}', [ProfileController::class, 'show_username']);

Route::middleware('auth')->group(function () {
    
    Route::get('/dashboard', [SiteController::class, 'show_dashboard']);
    
    Route::get('/profile', [ProfileController::class, 'show_profile']);    
    Route::put('/profile', [ProfileController::class, 'update_profile']);    
    Route::put('/profile/password', [ProfileController::class, 'update_password']);    
    Route::put('/profile/pfp', [ProfileController::class, 'update_pfp']);    

    Route::get('/tickets', [SiteController::class, 'show_tickets']);
    Route::post('/tickets', [SiteController::class, 'create_ticket']);
    Route::get('/tickets/{ticket_id}', [SiteController::class, 'show_ticket']);
    Route::put('/tickets/{ticket_id}', [SiteController::class, 'update_ticket']);    

    Route::get('/analytics', [CampaignController::class, 'show_analytics']);

    Route::get('/campaigns', [CampaignController::class, 'show_campaigns']);
    Route::get('/campaigns/{campaign_id}', [CampaignController::class, 'show_campaign']);

    Route::get('/contents', [ContentController::class, 'show_contents']);
    Route::get('/contents/{content_id}', [ContentController::class, 'show_content']);


    ## CREATOR

    Route::post('/contents', [ContentController::class, 'create_content']);
    Route::put('/contents/{content_id}', [ContentController::class, 'update_content']);   
    Route::get('/wallet', [WalletController::class, 'show_wallet']);    
    Route::put('/wallet', [WalletController::class, 'update_wallet']); 
    Route::post('/wallet/cashouts', [WalletController::class, 'to_cashout']);   
    
    ## BRAND 
    
    Route::get('/invoices', [WalletController::class, 'show_invoices']);    
    Route::get('/create-campaign', [CampaignController::class, 'show_create_campaign']);
    Route::post('/campaigns', [CampaignController::class, 'create_campaign']);

    
    ## ADMIN

    Route::get('/admin', [SiteController::class, 'show_admin_dashboard']);
    Route::post('earnings', [WalletController::class, 'approve_earning']);

    Route::post('/guides', [SiteController::class, 'create_guide']);
    Route::put('/guides/{guide_id}', [SiteController::class, 'update_guide']);
    
});
