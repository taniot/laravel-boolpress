<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return response()->json([
            'success' => true,
            'results' => $categories
        ]);
    }

    public function show(string $slug){
        $category = Category::where('slug', $slug)->with('posts')->first();

        return response()->json([
            'success' => true,
            'results' => $category
        ]);

    }
}
