<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ExchangeController extends Controller
{
    public function index() {
        $productsExchange = Products::where('availability', 'Available')->where('approved', 1)->where('exchange', 'Yes')->orderBy('created_at', 'desc')->get();
        return view('exchange', compact('productsExchange'));
    }
}
