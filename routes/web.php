<?php

use App\Http\Controllers\ListingController;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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
Route::get('/listings/create', [ListingController::class, 'create']);

// Show Store Data
Route::post('/listings', [ListingController::class, 'store']);




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