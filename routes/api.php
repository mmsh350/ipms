<?php

use App\Http\Controllers\RegistrationDetailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('registration-details/{id}', [RegistrationDetailController::class, 'show']);
