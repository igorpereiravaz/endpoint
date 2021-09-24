<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\WatchedTimeController;



Route::apiResource('/watchedtime', WatchedTimeController::class);
