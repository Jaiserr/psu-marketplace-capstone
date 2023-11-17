<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class WishlistController extends Controller
{

    public function index() {
        $wishlistItems = auth()->user()->wishlists;
        return view('customer.wishlist.index', compact('wishlistItems'));
    }

        public function addToWishlist(Products $product)
    {
        auth()->user()->wishlists()->create(['product_id' => $product->id]);
        return redirect(route('wishlist.index'));
    }


}
