<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Cviebrock\EloquentSluggable\Services\SlugService;

class MovieController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('movies.index')
            ->with('movies', Movie::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'director' => 'required',
            'actors' => 'required',
            'rating' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        Movie::create([
            'title' => $request->input('title'),
            'director' => $request->input('director'),
            'actors' => $request->input('actors'),
            'rating' => $request->input('rating'),
            'description' => $request->input('description'),
            'slug' => SlugService::createSlug(Movie::class, 'slug', $request->title),
            'poster' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/movies')
            ->with('message', 'Your movie has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('movies.show')
            ->with('movie', Movie::where('slug', $slug)->first());
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('movies.edit')
            ->with('movie', Movie::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'director' => 'required',
            'actors' => 'required',
            'rating' => 'required',
            'description' => 'required',
        ]);

        Movie::where('slug', $slug)
            ->update([
                 'title' => $request->input('title'),
                'director' => $request->input('director'),
                'actors' => $request->input('actors'),
                'rating' => $request->input('rating'),
                'description' => $request->input('description'),
                'slug' => SlugService::createSlug(Movie::class, 'slug', $request->title),
                'user_id' => auth()->user()->id
            ]);

        return redirect('/movies')
            ->with('message', 'Your movie has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $movie = Movie::where('slug', $slug);
        $movie->delete();

        return redirect('/movies')
            ->with('message', 'Your movie has been deleted!');
    }
}

