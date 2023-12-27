<?php

namespace App\Http\Controllers;

use App\Models\ProductCreationNotification;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(auth()->user()->id);
        if (Auth::check()) {
            if (Auth::user()->approved == null && Auth::user()->approved == "") {
            abort(403, 'You are not approved to access this resource.');
        }}
        $products = Products::where("user_id",auth()->user()->id)->latest()->get();
        return view('seller.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('seller.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'product_name' => 'required',
            'category' => 'required',
            'condition' => 'required',
            'price' => 'required',
            'availability' => 'required',
            'images' => ['required'],
            'details' => 'nullable',
            'exchange' => 'required',
        ]);


        if($request->hasfile('images')){
            $_multiple_images_ = array();
            foreach($request->file('images') as $imgs)
            {
                $path =  $imgs->store('product', 'public');
                $_multiple_images_[] = $path;
            }
        }

        $request->user()->products()->create([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'category' => $request->category,
            'condition' => $request->condition,
            'availability' => $request->availability,
            'details' => $request->details,
            'images' => implode('|', $_multiple_images_),
            'exchange' => $request->exchange,
        ]);

        ProductCreationNotification::create([
            'user_id' => 2,
            'message' => 'created new product.',
            'seller_name' => Auth::user()->name,
        ]);

        return redirect(route('admin-products.index'))->with('success-message', 'Product added successfully!');
    }

    public function indexByCategory($category)
    {
        $products = Products::where('category', $category)->where('availability', 'Available')->where('approved', 1)->get();
        // dd($products);

        return view('seller.category.products-category', compact('products','category'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Products $admin_product)
    {
        return view('seller.products.show', [
            "product" => $admin_product
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function productDetails($id)
    {
        $product = Products::findOrFail($id);
        $similarProducts = Products::where('category', $product->category)->where('id', '!=', $product->id)->where('approved', 1)->limit(6)->get();

        return view('customer.products.products-details', compact('product','similarProducts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $admin_product)
    {
        return view('seller.products.edit', [
            "product" => $admin_product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $admin_product)
    {

        $formFields = $request->validate([
            'product_name' => 'required',
            'category' => 'required',
            'condition' => 'required',
            'price' => 'required',
            'availability' => 'required',
            'images' => ['nullable'],
            'details' => ['nullable'],
            'exchange' => 'required',
        ]);

        if($request->hasfile('images')){
            $_multiple_images_ = array();
            foreach($request->file('images') as $imgs)
            {
                $path =  $imgs->store('product', 'public');
                $_multiple_images_[] = $path;
            }
        } else {
            $_multiple_images_[] = $admin_product->images;
        }

        $admin_product->update([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'category' => $request->category,
            'condition' => $request->condition,
            'availability' => $request->availability,
            'details' => $request->details,
            'images' => implode('|', $_multiple_images_),
            'exchange' => $request->exchange,
        ]);

        return redirect(route('admin-products.index'))->with('success-message', 'Product updated successfuly!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function search(Request $request)
{
    $query = $request->input('query');

    $results = Products::where(function ($queryBuilder) use ($query) {
        $queryBuilder->where('product_name', 'like', '%' . $query . '%')
                     ->orWhere('details', 'like', '%' . $query . '%');
    })
    ->get();
    return view('search-result', compact('results', 'query'));
}

    public function destroy(Products $admin_product): RedirectResponse
    {
        $admin_product->delete();
        return redirect()->back()->with('danger-message', 'Product Deleted');
    }

    public function approvedProducts() {
        $approvedProducts = Products::where('approved',1)->get();
        return view('seller.products.approved-products', compact('approvedProducts'));
    }

    public function toBeReviewProducts() {
        $toBeReviewProducts = Products::where('approved', null)->get();
        return view('seller.products.to-be-review-products', compact('toBeReviewProducts'));

    }
}
