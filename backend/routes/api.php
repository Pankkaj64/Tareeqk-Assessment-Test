<?php

use App\Http\Controllers\Api\TowingRequestController;

Route::get('/requests', [TowingRequestController::class, 'index']);
Route::post('/requests', [TowingRequestController::class, 'store']);
