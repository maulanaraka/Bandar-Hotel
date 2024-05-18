<?php

use App\Http\Controllers\APIGuestController;
use App\Http\Controllers\APIRoomController;
use App\Http\Controllers\APIReservationController;
use App\Http\Controllers\APIReviewController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('guest', [APIGuestController::class, 'index']);

Route::post('guest', [APIGuestController::class, 'upload']);

Route::get('room', [APIRoomController::class, 'index']);

Route::post('room', [APIRoomController::class, 'upload']);

Route::get('room', [APIReservationController::class, 'index']);

Route::post('room', [APIReservationController::class, 'upload']);

Route::get('room', [APIReviewController::class, 'index']);

Route::post('room', [APIReviewController::class, 'upload']);