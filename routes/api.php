<?php

use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('register', [RegisterUserController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);
