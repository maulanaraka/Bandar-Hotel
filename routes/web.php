<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\GuestController;

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

    //Billings Route
    Route::get('/billings', [BillingController::class, 'index'])->name('billings.index');
    Route::get('/billings/create', [BillingController::class, 'create'])->name('billings.create');
    Route::post('/billings', [BillingController::class, 'store'])->name('billings.store');
    Route::get('/billings/{id}', [BillingController::class, 'show'])->name('billings.show');
    Route::get('/billings/{id}/edit', [BillingController::class, 'edit'])->name('billings.edit');
    Route::put('/billings/{id}', [BillingController::class, 'update'])->name('billings.update');
    Route::delete('/billings/{id}', [BillingController::class, 'destroy'])->name('billings.destroy');

    //Guest Roots
    Route::get('guests', [GuestController::class, 'index'])->name('guests.index');
    Route::get('guests/create', [GuestController::class, 'create'])->name('guests.create');
    Route::post('guests', [GuestController::class, 'store'])->name('guests.store');
    Route::get('guests/{guest}', [GuestController::class, 'show'])->name('guests.show');
    Route::get('guests/{guest}/edit', [GuestController::class, 'edit'])->name('guests.edit');
    Route::put('guests/{guest}', [GuestController::class, 'update'])->name('guests.update');
    Route::delete('guests/{guest}', [GuestController::class, 'destroy'])->name('guests.destroy');
    


