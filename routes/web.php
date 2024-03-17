<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('top');
});

Route::get('/list', function () {
    return view('class-list');
});

Route::get('/list/{classId}', function () {
    return view('class');
});

Route::get('/list/{classId}/{participantId}', function () {
    return view('create-participant');
});
Route::post('/list/{classId}/{participantId}', function () {
    return view('create-participant');
});
Route::delete('/list/{classId}/{participantId}', function () {
    return view('create-participant');
});

Route::get('/setting', function () {
    return view('setting');
});
