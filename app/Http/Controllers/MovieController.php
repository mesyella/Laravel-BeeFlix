<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;

class MovieController extends Controller
{
    public function index($name){
        $genre= Genre::where('name', $name)->get();

        return view ('category', [
            'genre'=> $genre,
           
        ]);
    }
}
