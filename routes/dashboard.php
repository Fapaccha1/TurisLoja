<?php

use App\Http\Controllers\Dashboard\GraphicDateController;
use App\Http\Controllers\Dashboard\GraphicMuseumController;
use App\Http\Controllers\Dashboard\GraphicPlaceController;
use App\Http\Controllers\Dashboard\GraphicSurveyAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\MuseumController;
use App\Http\Controllers\Dashboard\MuseumRegisterController;
use App\Http\Controllers\Dashboard\PlaceController;
use App\Http\Controllers\Dashboard\SurveyController;
use App\Http\Controllers\Dashboard\UserController;

Route::get('', [HomeController::class,'index'])->name('dashboard.home');

Route::resource('users', UserController::class)->names('dashboard.users');
Route::resource('museums', MuseumController::class)->names('dashboard.museums');
Route::resource('places', PlaceController::class)->names('dashboard.places');
Route::resource('registers', MuseumRegisterController::class)->names('dashboard.registers');
Route::resource('surveys', SurveyController::class)->names('dashboard.survey');
Route::resource('gplaces', GraphicPlaceController::class)->names('dashboard.gplaces');
Route::resource('gdates', GraphicDateController::class)->names('dashboard.gdates');
Route::resource('gmuseums', GraphicMuseumController::class)->names('dashboard.gmuseums');
Route::resource('gsurveys', GraphicSurveyAdminController::class)->names('dashboard.gsurveys');
