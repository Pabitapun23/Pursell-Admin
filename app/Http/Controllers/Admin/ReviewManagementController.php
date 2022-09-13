<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RateAndReview;
use Illuminate\Http\Request;

class ReviewManagementController extends Controller
{
    public function reviewData()
    {
        $reviews = RateAndReview::with(['user', 'reviewer'])->orderBy('id', 'desc')->paginate(5);

        // $reviewer = RateAndReview::with('user')->get();


        //dd($reviewer);

        return view('admin.reviewmanagement')
            ->with('reviews', $reviews);
        // ->with('reviewer', $reviewer);
    }
}
