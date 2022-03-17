<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        // dump($movies);
        return view('movies', compact('movies'));
    }
}
