<?php

use App\Http\Controllers\Usercontorole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/users/register', [Usercontorole::class, 'store']);
Route::Post('/users/login', [Usercontorole::class, 'login']);
