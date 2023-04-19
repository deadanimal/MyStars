<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContentController;


Route::middleware('auth')->group(function () {

    Route::get('/contents', [ContentController::class, 'show_contents']);
    Route::get('/contents/{content_id}', [ContentController::class, 'show_content']);
    Route::post('/contents', [ContentController::class, 'create_content']);
    Route::put('/contents/{content_id}', [ContentController::class, 'update_content']);  

});