<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

//SITE
Route::get('/', [SiteController::class, 'index']);

//LOGIN
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::middleware('auth')->group(function () {
    // DASHBOARD
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

   