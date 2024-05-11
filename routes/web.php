<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\APIController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\App;



Route::get('/setlocale/{locale}', 
[LanguageController::class ,'setLocale'])->name('setLocale');

Route::get('/', function () {

    return view('index');
});

Route::post('/users', [UserController::class, 'store']);

Route::get('/validate-username', [UserController::class, 'validateUsername']);

Route::get('/check-actors', [APIController::class, 'checkActors']);