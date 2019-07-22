<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\Review;
use App\Models\Product;
use Auth;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $review = Review::with('product', 'product.user')->paginate(10);
        return view('web-settings.Review.reviews', compact('review'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $review = new Review;
        $review->review = $request->message;
        $review->user_id = Auth::user()->id;
        $review->product_id = $request->product_id;
        $review->save();
        $rating = $this->calculateRating($request->rating, $review->product_id, $review->id);
        Product::where('id',$review->product_id)->update(['star'=>$rating]);
        return back();
    }
    /**
     * Calculate the specified Rating.
     *
     * @param  \App\Models\Rating  $review
     * @return \Illuminate\Http\Response
     */
    public function calculateRating($star, $product_id, $review_id)
    {
        $rating =  Rating::where('product_id',$product_id)->first();
        if($rating == null){
            $rating = new Rating;
            $rating->review_id = $review_id;
            if ($star == 1) {
                $rating->one_star = $star;
            }
            if ($star == 2) {
                $rating->two_star = $star;
            }
            if ($star == 3) {
                $rating->three_star = $star;
            }
            if ($star == 4) {
                $rating->four_star = $star;
            }
            if ($star == 5) {
                $rating->five_star = $star;
            }
            $rating->product_id = $product_id;
            $rating->avg_rating = 0;
            $rating->save();
        }
        $rating->review_id = $review_id;
        $rating->product_id = $product_id;
        if ($star == 1) {
            $rating->one_star = $rating->one_star + 1;
        }
        if ($star == 2) {
            $rating->two_star = $rating->two_star + 1;
        }
        if ($star == 3) {
            $rating->three_star = $rating->three_star + 1;
        }
        if ($star == 4) {
            $rating->four_star = $rating->four_star + 1;
        }
        if ($star == 5) {
            $rating->five_star = $rating->five_star + 1;
        }
        $currentRating = $this->currentRating(
            $rating->one_star,
            $rating->two_star,
            $rating->three_star,
            $rating->four_star,
            $rating->five_star
        );
        $rating->avg_rating = $currentRating;
        $rating->save();
        return $currentRating;
    }

    /**
     * Calculate the  currentRating.
     *
     * @param  \App\Models\Rating
     * @return \Illuminate\Http\Response
     */
    public function currentRating($one,$two,$three,$four,$five)
    {
        $avg = (1*$one+2*$two+3*$three+4*$four+5*$five) / ($one+$two+$three+$four+$five);
        return $avg;
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review, $id)
    {
        $review = Review::destroy($id);
        return back();

    }
}
