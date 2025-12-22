<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\RegisteredUserController;
use App\Models\Company;

Route::middleware('guest')->group(function() {
    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store']);
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
});

Route::middleware('auth')->group(function() {

    /** SESSION ROUTES  */
    Route::delete('/logout', [SessionController::class, 'destroy']);

    /** JOB ROUTES */
    Route::get('/', [JobsController::class, 'indexMonth']);
    Route::get('/jobs', [JobsController::class, 'index']);
    Route::get('/jobs/create', [JobsController::class, 'create']);
    Route::post('/jobs', [JobsController::class, 'store']);
    Route::get('/jobs/{id}/done', [JobsController::class, 'makeDone']);
    Route::get('/jobs/{id}/undone', [JobsController::class, 'makeUndone']);
    Route::get('/jobs/{id}', [JobsController::class, 'edit']);
    Route::patch('/jobs/{id}', [JobsController::class, 'update']);

    /** COMPANY ROUTES */
    Route::get('/companies', [CompaniesController::class, 'index']);
    Route::get('/companies/create', [CompaniesController::class, 'create']);
    Route::post('/companies', [CompaniesController::class, 'store']);
    Route::get('/companies/{id}', [CompaniesController::class, 'edit']);
    Route::patch('/companies/{id}', [CompaniesController::class, 'update']);
    
});
