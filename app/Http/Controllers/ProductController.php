<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Products::orderBy('created_at', 'desc')->get();
        return view('administrator.products.products-table', compact('products'));
    }
}
