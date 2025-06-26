<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Add API routes here temporarily
Route::prefix('api')->group(function () {
    // Test route
    Route::get('/test', function () {
        return response()->json(['message' => 'API is working!']);
    });
    
    // Simple products route
    Route::get('/products', function () {
        return response()->json([
            [
                'id' => 1,
                'name' => 'Fresh Orange Juice',
                'price' => 4.99,
                'description' => '100% pure orange juice',
                'stock' => 50,
                'rating' => 4.8,
                'is_active' => true,
                'category' => ['name' => 'Juices']
            ],
            [
                'id' => 2,
                'name' => 'Energy Drink',
                'price' => 3.49,
                'description' => 'Natural energy boost',
                'stock' => 30,
                'rating' => 4.6,
                'is_active' => true,
                'category' => ['name' => 'Energy Drinks']
            ]
        ]);
    });
    
    // Featured products
    Route::get('/products/featured', function () {
        return response()->json([
            [
                'id' => 1,
                'name' => 'Fresh Orange Juice',
                'price' => 4.99,
                'description' => '100% pure orange juice',
                'stock' => 50,
                'rating' => 4.8,
                'is_active' => true,
                'category' => ['name' => 'Juices']
            ]
        ]);
    });
    
    // Categories
    Route::get('/categories', function () {
        return response()->json([
            ['id' => 1, 'name' => 'Juices', 'description' => 'Fresh fruit juices'],
            ['id' => 2, 'name' => 'Sodas', 'description' => 'Carbonated beverages'],
            ['id' => 3, 'name' => 'Energy Drinks', 'description' => 'Energy boosters']
        ]);
    });
});