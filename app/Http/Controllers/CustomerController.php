<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        $customers = User::whereHasRole('customer')->orderBy('created_at', 'desc')->get();
        return view('administrator.customers.customer-table', compact('customers'));
    }
}
