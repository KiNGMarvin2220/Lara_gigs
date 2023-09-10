<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductApiController extends Controller
{
    // listing data via json
    public function index(){
        return Product::all();
    }

    // Show single listing
    public function show(Product $product) {
        return $product;
    }

    public function store(Request $request) {
        $product = Product::create($request->all());
        return response([
            'message' => 'product successfully created',
            'product' => $product,
            'id' => $product->id
        ], 201
      );
    }

    public function update(Request $request, Product $product) {
        $product->update($request->all());
        return response([
            'message' => 'product successfully created',
            'product' => $product,
            'id' => $product->id
        ]);
    }

    public function destroy(Product $product){
        Product::destroy($product->id);
        return response([
            'message' => 'product successfully deleted',
        ]);
    }
    
}

