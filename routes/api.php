<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    // Defines an API route that listens for GET requests at the `/user` endpoint.
    // The route is protected by the 'auth:sanctum' middleware, which ensures only authenticated users can access it.

    return $request->user();
    // Returns the currently authenticated user as a response.
});
