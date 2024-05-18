<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ReservationController;

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/home1', function () {
        return view('home1');
    });

    Route::get('/table', function () {
        return view('table');
    });

    Route::get('/reviewpage', function () {
        return view('reviewpage');
    });

    //Billing Routes
    Route::get('/billings', [BillingController::class, 'index'])->name('billings.index');
    Route::get('/billings/create', [BillingController::class, 'create'])->name('billings.create');
    Route::post('/billings', [BillingController::class, 'store'])->name('billings.store');
    Route::get('/billings/{id}', [BillingController::class, 'show'])->name('billings.show');
    Route::get('/billings/{id}/edit', [BillingController::class, 'edit'])->name('billings.edit');
    Route::put('/billings/{id}', [BillingController::class, 'update'])->name('billings.update');
    Route::delete('/billings/{id}', [BillingController::class, 'destroy'])->name('billings.destroy');

    //Guests Routes
    Route::get('guests', [GuestController::class, 'index'])->name('guests.index');
    Route::get('guests/create', [GuestController::class, 'create'])->name('guests.create');
    Route::post('guests', [GuestController::class, 'store'])->name('guests.store');
    Route::get('guests/{guest}', [GuestController::class, 'show'])->name('guests.show');
    Route::get('guests/{guest}/edit', [GuestController::class, 'edit'])->name('guests.edit');
    Route::put('guests/{guest}', [GuestController::class, 'update'])->name('guests.update');
    Route::delete('guests/{guest}', [GuestController::class, 'destroy'])->name('guests.destroy');
     
    //Room Routes
    Route::get('rooms', [RoomController::class, 'index'])->name('rooms.index');
    Route::get('rooms/create', [RoomController::class, 'create'])->name('rooms.create');
    Route::post('rooms', [RoomController::class, 'store'])->name('rooms.store');
    Route::get('rooms/{room}', [RoomController::class, 'show'])->name('rooms.show');
    Route::get('rooms/{room}/edit', [RoomController::class, 'edit'])->name('rooms.edit');
    Route::put('rooms/{room}', [RoomController::class, 'update'])->name('rooms.update');
    Route::delete('rooms/{room}', [RoomController::class, 'destroy'])->name('rooms.destroy');

    //Review Routes
    Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
    Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
    Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
    Route::get('/reviews/{id}', [ReviewController::class, 'show'])->name('reviews.show');

    //Reservation Routes
    Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
    Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
    Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
    Route::get('/reservations/{id}', [ReservationController::class, 'show'])->name('reservations.show');
    Route::get('/reservations/{id}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');
    Route::put('/reservations/{id}', [ReservationController::class, 'update'])->name('reservations.update');
    Route::delete('/reservations/{id}', [ReservationController::class, 'destroy'])->name('reservations.destroy');
