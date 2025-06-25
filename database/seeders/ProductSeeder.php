<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Fresh Orange Juice',
                'slug' => 'fresh-orange-juice',
                'description' => '100% pure orange juice with no added sugar',
                'price' => 4.99,
                'original_price' => 6.99,
                'stock' => 50,
                'rating' => 4.8,
                'reviews_count' => 124,
                'is_on_sale' => true,
                'category' => 'Juices',
            ],
            [
                'name' => 'Premium Energy Boost',
                'slug' => 'premium-energy-boost',
                'description' => 'Natural energy drink with vitamins and minerals',
                'price' => 3.49,
                'stock' => 30,
                'rating' => 4.6,
                'reviews_count' => 89,
                'is_new' => true,
                'category' => 'Energy Drinks',
            ],
            [
                'name' => 'Craft Cola Classic',
                'slug' => 'craft-cola-classic',
                'description' => 'Artisanal cola made with natural ingredients',
                'price' => 2.99,
                'stock' => 75,
                'rating' => 4.7,
                'reviews_count' => 156,
                'category' => 'Sodas',
            ],
            [
                'name' => 'Green Tea Blend',
                'slug' => 'green-tea-blend',
                'description' => 'Premium green tea blend with antioxidants',
                'price' => 5.49,
                'stock' => 40,
                'rating' => 4.9,
                'reviews_count' => 203,
                'is_new' => true,
                'category' => 'Tea',
            ],
            [
                'name' => 'Sparkling Water',
                'slug' => 'sparkling-water',
                'description' => 'Natural sparkling water with minerals',
                'price' => 1.99,
                'original_price' => 2.49,
                'stock' => 100,
                'rating' => 4.5,
                'reviews_count' => 78,
                'is_on_sale' => true,
                'category' => 'Water',
            ],
            [
                'name' => 'Cold Brew Coffee',
                'slug' => 'cold-brew-coffee',
                'description' => 'Smooth cold brew coffee concentrate',
                'price' => 4.29,
                'stock' => 25,
                'rating' => 4.8,
                'reviews_count' => 167,
                'category' => 'Coffee',
            ],
        ];

        foreach ($products as $productData) {
            $category = Category::where('name', $productData['category'])->first();
            unset($productData['category']);
            
            Product::create([
                ...$productData,
                'category_id' => $category->id,
            ]);
        }
    }
}
