<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        if (Auth::user()->hasRole("superadministrator")) {
            $sellers = User::whereHasRole('seller')->get();
            return view('administrator.dashboard.index', compact('sellers'));
        } elseif (Auth::user()->hasRole('seller')) {
            return view('seller.dashboard.index');
        }  elseif (Auth::user()->hasRole('customer')) {
            return view('customer.dashboard.index');
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
