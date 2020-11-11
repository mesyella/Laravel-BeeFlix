<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;

class GenreController extends Controller
{
    public function index(){
        $genres= Genre::all();
        $dramas= Movie::where('genre_id', 1)->get();
        $kidsMovies= Movie::where('genre_id', 2)->get();
        $tvShows= Movie::where('genre_id', 3)->get();
        return view ('home', [
            'genres' => $genres,
            'dramas' => $dramas,
            'kidsMovies' => $kidsMovies,
            'tvShows'=> $tvShows,
        ]);
    }
}
