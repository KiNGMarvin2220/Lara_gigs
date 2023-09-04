<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
        // Show all Listing
        public function index() {
            return view('products.index', [
                'products' => Product::latest()->filter
                (request(['tag', 'search']))->get(),
                'cartNum' => 5,
            ]);
        }
}
