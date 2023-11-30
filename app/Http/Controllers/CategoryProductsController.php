<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class CategoryProductsController extends Controller
{
    public function index()
    {
        // Fetch all distinct categories
        $categories = Products::distinct()->pluck('category');

        // Fetch products for each category
        $productsByCategory = [];
        foreach ($categories as $category) {
            $productsByCategory[$category] = Products::where('category', $category)->take(5)->get();
        }

        return view('category-products', ['productsByCategory' => $productsByCategory]);
    }
}
