<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SubmissionController;


Route::middleware('auth')->group(function () {

    Route::get('/submissions', [SubmissionController::class, 'list_submissions']);
    Route::post('/submissions', [SubmissionController::class, 'create_submission']);
    
    Route::get('/submissions/{submission_id}', [SubmissionController::class, 'detail_submission']);    
    Route::put('/submissions/{submission_id}', [SubmissionController::class, 'update_submission']);    

});