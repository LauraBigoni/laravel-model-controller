<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        // dump($movies);
        return view('movies.index', compact('movies'));
    }

    public function show() {
        return view('movies.show', compact('movies'));
    }
}
