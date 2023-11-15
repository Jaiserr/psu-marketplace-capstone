<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::latest()->get();
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
            'images' => implode('|', $_multiple_images_),
        ]);

        return view('seller.products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
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






     /*    if($request->hasFile('product_image')) {
            $product_image = $request->file('product_image')->store('products', 'public');
        } else {
            $product_image =  $product->product_image;
        }; */

        $admin_product->update([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'category' => $request->category,
            'condition' => $request->condition,
            'availability' => $request->availability,
            'images' => implode('|', $_multiple_images_),
        ]);

        return redirect(route('admin-products.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        //
    }
}
