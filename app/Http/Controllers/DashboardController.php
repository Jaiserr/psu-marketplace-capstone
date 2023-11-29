<?php

namespace App\Http\Controllers;

use App\Mail\ApprovedSeller;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
            $products = Products::orderBy('created_at', 'desc')->get();
            return view('seller.dashboard.index', compact('products'));
        }  elseif (Auth::user()->hasRole('customer')) {
            $products = Products::orderBy('created_at', 'desc')->get();
            $wishlistItemsCount = auth()->user()->wishlists->count();
            return view('customer.dashboard.index', compact('products', 'wishlistItemsCount'));
        };
    }

    public function approve(Request $request)
    {
       User::where('id', $request->id)->update([
            'approved' => 1,
        ]);

        $data = [
            'email' => $request->email,
            'name' => $request->name,
        ];

        Mail::to($data['email'])->send(new ApprovedSeller($data));


        return redirect()->back();
    }

    public function privacyPolicy() {
        return view('privacy-policy');
    }

    public function termsAndConditions() {
        return view('terms-and-conditions');
    }
}
