<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WalletController;


Route::stripeWebhooks('stripe-webhook');

Route::middleware('auth')->group(function () {
        
    Route::get('/wallet', [WalletController::class, 'show_wallet']);    
    Route::put('/wallet', [WalletController::class, 'update_wallet']); 
    Route::post('/wallet/cashouts', [WalletController::class, 'to_cashout']);   
    Route::get('/invoices', [WalletController::class, 'show_invoices']);    
    Route::get('/admin', [SiteController::class, 'show_admin_dashboard']);
    Route::post('earnings', [WalletController::class, 'approve_earning']);

});

require __DIR__.'/modules/wallet.php';
require __DIR__.'/modules/static.php';
require __DIR__.'/modules/utility.php';
require __DIR__.'/modules/campaign.php';
require __DIR__.'/modules/content.php';
require __DIR__.'/modules/analytics.php';