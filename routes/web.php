<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('top');
});

Route::get('/list', function () {
    return view('class-list');
});

Route::get('/list/{id}', function () {
    return view('class');
});

Route::get('/setting', function () {
    return view('setting');
});
