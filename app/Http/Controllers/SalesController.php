<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function show($id) {
        $sales = User::whereHasRole('seller')
        ->with(['products' => function ($query) {
        $query->where('availability', 'Sold');
    }])
    ->findOrFail($id);

        return view('administrator.dashboard.sales-table', compact('sales'));
    }
}
