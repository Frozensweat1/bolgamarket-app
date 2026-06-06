<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing.index');
})->name('landing');

Route::get('/admin', function () {
    return view('pages.admin.dashboard');
})->name('admin.dashboard');
