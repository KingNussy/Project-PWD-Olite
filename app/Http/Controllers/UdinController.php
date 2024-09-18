<?php

namespace App\Http\Controllers;

use App\Models\UdinMovie;
use Illuminate\Http\Request;

class UdinController extends Controller
{
    /**
     * Display a listing of the movies.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $udinmovie = UdinMovie::all();
        

        $movies = UdinMovie::where('category', 'movie')->get();//function kategori
        $tvShows = UdinMovie::where('category', 'serial')->get();
        
        
        return view ('index',['udinmovie'=> $udinmovie,'movies'=>$movies,'tvShows'=>$tvShows]);
    }
}
