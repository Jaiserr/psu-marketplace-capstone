<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('superadministrator')) {
            return view('administrator.dashboard.index');
        } elseif (Auth::user()->hasRole('seller')) {
            return view('seller.dashboard.index');
        }elseif (Auth::user()->hasRole('customer')) {
            return view('customer.dashboard.index');
        };
    }
}
