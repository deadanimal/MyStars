<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WalletController;

Route::middleware('auth')->group(function () {

    Route::get('/billing', [WalletController::class, 'billing']);


});