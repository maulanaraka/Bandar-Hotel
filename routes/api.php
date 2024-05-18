<?php


use App\Http\Controllers\APIGuestController;
use App\Http\Controllers\APIBillingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('guest', [APIGuestController::class, 'index']);

Route::post('guest', [APIGuestController::class, 'upload']);

Route::get('billing', [APIBillingController::class, 'index']);

Route::post('billing', [APIBillingController::class, 'upload']);