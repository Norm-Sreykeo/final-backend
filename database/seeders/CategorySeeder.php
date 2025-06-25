<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Juices', 'slug' => 'juices', 'description' => 'Fresh and natural fruit juices'],
            ['name' => 'Sodas', 'slug' => 'sodas', 'description' => 'Refreshing carbonated beverages'],
            ['name' => 'Energy Drinks', 'slug' => 'energy-drinks', 'description' => 'Boost your energy naturally'],
            ['name' => 'Water', 'slug' => 'water', 'description' => 'Pure and mineral water'],
            ['name' => 'Coffee', 'slug' => 'coffee', 'description' => 'Premium coffee beverages'],
            ['name' => 'Tea', 'slug' => 'tea', 'description' => 'Traditional and herbal teas'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
