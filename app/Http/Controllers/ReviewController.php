<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('reviews.index', compact('reviews'));
    }

    public function create()
    {
        return view('reviews.create');
    }

    public function store(Request $request)
    {
        $review = Review::create($request->all());
        return redirect()->route('reviews.index');
    }

    public function show($id)
    {
        $review = Review::find($id);
        return view('reviews.show', compact('review'));
    }
}