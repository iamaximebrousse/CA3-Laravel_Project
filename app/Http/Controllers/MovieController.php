<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            ]);
        $movie = new Movie();
        $movie->title = $request->title;
        $movie->body = $request->body;
        $movie->published_at = $request->published_at;

        $movie->save();
        return redirect('/home');
    }

    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    public function update(Movie $movie, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            ]);
        $movie->title = $request->title;
        $movie->body = $request->body;
        $movie->published_at = $request->published_at;

        $movie->save();
        return redirect('/home');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect('/home');
    }
}