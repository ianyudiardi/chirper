<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;

Route::get('/', [ChirpController::class, 'index']);

Route::resource('chirps', ChirpController::class)->only([
    'store', 'edit', 'update', 'destroy'
]);

// the route above is equivalent to the following routes:

// Route::post('/chirps', [ChirpController::class, 'store']);
// Route::get('/chirps/{chirp}/edit', [ChirpController::class, 'edit']);
// Route::put('/chirps/{chirp}', [ChirpController::class, 'update']);
// Route::delete('/chirps/{chirp}', [ChirpController::class, 'destroy']);
