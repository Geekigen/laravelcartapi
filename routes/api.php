<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Api\TokenAuthenticationController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return response()->json($request->user());
});


Route::middleware(['guest'])->post('/login', [TokenAuthenticationController::class, 'store']);
Route::middleware(['auth:sanctum'])->post('/logout', [TokenAuthenticationController::class, 'destroy']);
