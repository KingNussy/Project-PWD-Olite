<?php

namespace App\Http\Controllers;

use App\Models\MovieRating;
use Illuminate\Http\Request;

class MovieRatingController extends Controller
{
    /**
     * Display a listing of the movie ratings.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ratings = MovieRating::with('movie')->get();
        return response()->json($ratings);
    }

    /**
     * Store a newly created movie rating in the database.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'movie_id' => 'required|exists:movies,id',
            'rating' => 'required|integer|min:1|max:10',
            'review' => 'nullable|string',
        ]);

        $rating = MovieRating::create($validated);

        return response()->json($rating, 201);
    }

    /**
     * Display the specified movie rating.
     *
     * @param \App\Models\MovieRating $rating
     * @return \Illuminate\Http\Response
     */
    public function show(MovieRating $rating)
    {
        return response()->json($rating->load('movie'));
    }

    /**
     * Update the specified movie rating in the database.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\MovieRating $rating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MovieRating $rating)
    {
        $validated = $request->validate([
            'movie_id' => 'sometimes|required|exists:movies,id',
            'rating' => 'sometimes|required|integer|min:1|max:10',
            'review' => 'nullable|string',
        ]);

        $rating->update($validated);

        return response()->json($rating);
    }

    /**
     * Remove the specified movie rating from the database.
     *
     * @param \App\Models\MovieRating $rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(MovieRating $rating)
    {
        $rating->delete();

        return response()->json(null, 204);
    }
}