<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChallengeController;


Route::middleware('auth')->group(function () {

    Route::get('/challenges', [ChallengeController::class, 'list_challenges']);
    Route::get('/challenges/create', [ChallengeController::class, 'viewform_challenge']);
    Route::get('/challenges/explore', [ChallengeController::class, 'explore_challenges']);
    Route::post('/challenges', [ChallengeController::class, 'create_challenge']);
    
    Route::get('/challenges/{challenge_id}', [ChallengeController::class, 'detail_challenge']);    
    Route::put('/challenges/{challenge_id}', [ChallengeController::class, 'update_challenge']);    


});