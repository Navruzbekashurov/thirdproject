<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AttendeeController;
use App\Http\Controllers\Api\EventController;




Route::apiResource('events', EventController::class);
Route::apiResource('events.attendees', AttendeeController::class)
    ->scoped()->except('update');



