<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        if (Auth::user()->hasRole("superadministrator")) {
            $sellers = User::whereHasRole('seller')->get();
            $customers = User::whereHasRole('customer')->get();
            $sellersCount = User::whereHasRole('seller')->count();
            $customersCount = User::whereHasRole('customer')->count();
            $productsCount = Products::count();
            $products = Products::get();
            return view('administrator.dashboard.index', compact('sellers', 'products', 'customers', 'sellersCount', 'productsCount', 'customersCount'));
        } elseif (Auth::user()->hasRole('seller')) {
            $products = Products::all();
            return view('seller.dashboard.index', compact('products'));
        }  elseif (Auth::user()->hasRole('customer')) {
            $products = Products::all();
            $wishlistItemsCount = auth()->user()->wishlists->count();
            return view('customer.dashboard.index', compact('products', 'wishlistItemsCount'));
        };
    }

    public function approve(Request $request)
    {
       User::where('id', $request->id)->update([
            'approved' => 1,
        ]);


        return redirect()->back();
    }
}
