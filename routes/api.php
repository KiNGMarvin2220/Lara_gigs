<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductApiController;
use App\Http\Controllers\AuthenticationApiController;

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

// Route::get('/posts', function() {
//     return response()->json([
//         'posts' => [
//             'title' => 'Post One'
//         ]
//         ]);

// });

Route::middleware('auth:sanctum')->group(function () {
    // Listing Products as API
    Route::get('/products', [ProductApiController::class, 'index']);
    
    // Show specified data
    Route::get('/products/{product}', [ProductApiController::class, 'show']);
    
    
    // Edit specified data
    Route::put('/products/{product}', [ProductApiController::class, 'update']);
    
    // PATCH/Edit specified data
    Route::patch('/products/{product}', [ProductApiController::class, 'update']);
    
    // delete specified data
    Route::delete('/products/{product}', [ProductApiController::class, 'destroy']);

    // Listing Users as API
    Route::get('/users', [AuthenticationApiController::class, 'index']);

    //Log out user
    Route::post('/logout', [AuthenticationApiController::class, 'logout']);
});

    // Store Products via API
    Route::post('/products', [ProductApiController::class, 'store']);

    // Log in user first
    Route::post('/login', [AuthenticationApiController::class, 'login']);



