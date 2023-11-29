<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index() {
        $sellers = User::whereHasRole('seller')->orderBy('created_at', 'desc')->get();
        return view('administrator.sellers.seller-table', compact('sellers'));
    }
}
