<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::withCount(['products' => function ($query) {
            $query->where('is_active', true);
        }])->get();

        return response()->json($categories);
    }
}
