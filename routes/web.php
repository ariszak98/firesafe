<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\RegisteredUserController;

Route::get('/', function () {
    return view('main');
});

Route::middleware('guest')->group(function() {
    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store']);
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
});

Route::middleware('auth')->group(function() {
    Route::delete('/logout', [SessionController::class, 'destroy']);
    Route::get('/jobs', [JobsController::class, 'index']);
    Route::get('/jobs/create', [JobsController::class, 'create']);
    Route::post('/jobs', [JobsController::class, 'store']);
    Route::get('/companies', [CompaniesController::class, 'index']);
    Route::get('/companies/create', [CompaniesController::class, 'create']);
    Route::post('/companies', [CompaniesController::class, 'store']);
});