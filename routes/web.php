<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('Tugas1.welcome');
});

Route::get('home', function () {
    return view('Tugas1.home');
});

Route::get('form', function () {
    return view('Tugas1.form');
});

Route::get('/', function () {
    return view('dasboard');
});

Route::get('icon', function () {
    return view('icon');
});

Route::get('dasboard', function () {
    return view('dasboard');
});

Route::get('notifications', function () {
    return view('notifications');
});

Route::get('user', function () {
    return view('user');
});