<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;
use App\Episode;

class EpisodeController extends Controller
{
    public function show($title){
        $movie = Movie::where('title', $title)->get();
        $genre = Genre::where('id', $movie[0]->genre_id)->get();
        $episodes = Episode::where('movie_id', $movie[0]->id)->paginate(3);
        return view ('detail', [
            'movie'=> $movie,
            'genre'=> $genre,
            'episodes'=> $episodes,
        ]);
    }
}
