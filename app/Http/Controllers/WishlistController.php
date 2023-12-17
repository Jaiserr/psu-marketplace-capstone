<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class WishlistController extends Controller
{

    public function index() {
        $wishlistItems = auth()->user()->wishlists;
        $wishlistCount = auth()->user()->wishlists->count();
        return view('customer.wishlist.index', compact('wishlistItems', 'wishlistCount'));
    }

        public function addToWishlist(Products $product)
    {
        auth()->user()->wishlists()->create(['product_id' => $product->id]);
        return redirect(route('wishlist.index'))->with('success-message', 'Added to saved product!');
    }

        public function removeFromWishlist(Products $product)
    {
        // Find and delete the wishlist item for the specified product and current user
        auth()->user()->wishlists()->where('product_id', $product->id)->delete();

        return redirect(route('wishlist.index'))->with('danger-message', 'Removed from saved product!');
    }

}
