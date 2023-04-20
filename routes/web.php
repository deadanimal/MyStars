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
    Route::post('earnings', [WalletController::class, 'approve_earning']);

});

require __DIR__.'/web/admin.php';
require __DIR__.'/web/staff.php';

require __DIR__.'/web/challenge.php';
require __DIR__.'/web/submission.php';

require __DIR__.'/web/wallet.php';
require __DIR__.'/web/static.php';
require __DIR__.'/web/utility.php';
require __DIR__.'/web/campaign.php';
require __DIR__.'/web/content.php';
require __DIR__.'/web/concierge.php';
require __DIR__.'/web/analytics.php';