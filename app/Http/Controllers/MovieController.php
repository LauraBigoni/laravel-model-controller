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

    public function show($id)
    {
        $movies = Movie::all();

        $movie = Movie::findOrFail($id);

        $prev = $id > 1 ? $id - 1 : count($movies);
        $next = $id == count($movies) ? 1 : $id + 1;
        return view('movies.show', compact('movie', 'prev', 'next'));
    }
}
