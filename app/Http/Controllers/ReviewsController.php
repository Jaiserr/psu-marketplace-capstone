<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'rating' => 'required',
            'review' => 'required',
        ]);

        // Check if the user has already submitted a review for the specified profile
        $existingReview = Reviews::where('user_id', auth()->user()->id)
            ->where('profile_id', $request->profile_id)
            ->first();

        if ($existingReview) {
            return redirect()->back()->with('success-message', 'You have already submitted a review for this profile.');
        }

        // Create a new review
        Reviews::create([
            'user_id' => auth()->user()->id,
            'profile_id' => $request->profile_id,
            'rating' => $request->rating,
            'review' => $request->review,
        ]);

        return redirect()->back()->with('success-message', 'Reviewed Successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(Reviews $reviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reviews $reviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reviews $reviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reviews $reviews)
    {
        //
    }
}
