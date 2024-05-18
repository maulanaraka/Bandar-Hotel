<?php

use Illuminate\Support\Facades\Route;

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
