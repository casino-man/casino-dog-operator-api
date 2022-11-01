<?php

use Illuminate\Support\Facades\Route;
use Wainwright\CasinoDogOperatorApi\Controllers\TestingController;

Route::middleware('web', 'throttle:2000,1')->group(function () {
    Route::get('/casino-dog-operator-api/testing/{function}', [TestingController::class, 'handle']);
});