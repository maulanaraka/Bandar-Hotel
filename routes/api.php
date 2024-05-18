<?php


use App\Http\Controllers\APIGuestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('guest', [APIGuestController::class, 'index']);

Route::post('guest', [APIGuestController::class, 'upload']);
