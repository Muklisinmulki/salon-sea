<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::latest()->paginate(10);

        return view('home', compact('reviews'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'content' => 'required|string',
        ]);

        // Create a new review instance
        $review = new Review();
        $review->name = $validatedData['name'];
        $review->rating = $validatedData['rating'];
        $review->content = $validatedData['content'];

        // Save the review
        $review->save();

        // Redirect back or to a thank you page
        return redirect()->back()->with('success', 'Review submitted successfully!');
    }
}
