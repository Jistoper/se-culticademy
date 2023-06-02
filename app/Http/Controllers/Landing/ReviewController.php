<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $reviews = Review::search('rating')
        ->multiSearch('course','name')
        ->multiSearch('user', 'name')->latest()->get();

        return view('landing.review.index', compact('reviews'));
    }
}
