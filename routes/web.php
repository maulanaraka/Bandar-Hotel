<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillingController;

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

