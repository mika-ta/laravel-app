<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('lesson.index');
});

Route::get('/list', function () {
    return view('number_of_lesson.index');
});

Route::get('/list/{classId}', function () {
    return view('number_of_lesson.lesson');
});

Route::get('/list/{classId}/{participantId}', function () {
    return view('participant.create');
});
Route::post('/list/{classId}/{participantId}', function () {
    return view('participant.create');
});
Route::delete('/list/{classId}/{participantId}', function () {
    return view('participant.create');
});

Route::get('/setting', function () {
    return view('setting');
});
