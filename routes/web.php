<?php

use App\Models\Listing;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// COMMON RESOURCE ROUTES
//  - index - Show all listing
//  - show - Show single listig
//  - create - Show form to create new listing
//  - store - Store new listing
//  - edit - Show form to edit listing
//  - update - Update listing
//  - destroy - Delete listing
//Listing
// Show list all
Route::get('/', [ListingController::class, 'index']);

// Show single list
Route::get('/listing/{listing}', [ListingController::class, 'show']);

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');


//Product
// Show list all
Route::get('/products', [ProductController::class, 'index']);


//SHOW REGISTER/CREATE FORM
Route::get('/register', [UserController::Class, 'create'])->middleware('guest');

//Create new user
Route::post('/users', [UserController::class, 'store']);

// Log user out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');


// Show route
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// // 19:34 Wildcard Endpoint
// // ?use of Network , status, Header, 
// Route::get('/hello', function () {
//     return response('<h1> return 200</h1>');
// });

// // how can 'where' here is posible?
// // what are the dd() ddd()
// Route::get('/posts/{id}', function($id){
//     ddd($id);
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');


// //
// Route::get('/search', function(Request $request){
//     return $request->name . ' ' . $request->city;

// });