<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\APIRoomController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('guest', [GuestController::class, 'index']);

Route::post('guest', [GuestController::class, 'upload']);

Route::get('room', [APIRoomController::class, 'index']);

Route::post('room', [APIRoomController::class, 'upload']);