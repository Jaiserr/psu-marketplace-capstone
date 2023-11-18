<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use App\Models\SellerProfile;
use App\Models\User;
use Illuminate\Http\Request;

class SellerProfileController extends Controller
{
    public function show($id)
    {
        $seller = User::with('products')->whereHasRole('seller')->findorFail($id);
        $reviews = Reviews::with('user')->where('profile_id', $seller->id)->get();
        return view('seller.profile.index', compact('seller', 'reviews'));
    }
}
