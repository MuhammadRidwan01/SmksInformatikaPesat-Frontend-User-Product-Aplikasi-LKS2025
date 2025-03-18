<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\Usercontorole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/users/register', [Usercontorole::class, 'store']);
Route::post('/users/login', [Usercontorole::class, 'login']);
Route::get('/users/profile', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/products', [ProductController::class, 'store']);
