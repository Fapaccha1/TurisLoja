<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/fechas', function () {
    return view('frontend.fechas');
});
Route::get('/encuestas', function () {
    return view('frontend.encuestas');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin', function () {
        return view('dashboard');
    })->name('admin');
});
