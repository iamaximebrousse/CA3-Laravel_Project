@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center border-gray-200" >
    <div class="py-15 border-b">
        <h1 class="text-6xl text-white font-bold">
            Movies
        </h1>
        @if (Auth::check())
    <div class="float-right">
        <a 
            href="/movies/create"
            class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
            Create movie
        </a>
    </div>
@endif
    </div>
    
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif



<article class="movies">
@foreach ($movies as $movie)
        <div>
            <a href="/movies/{{ $movie->slug }}">
            <img src="{{ asset('images/' . $movie->poster) }}" alt="">
            <h2>
                {{ $movie->title }}
            </h2>
            </a>
        </div>   
@endforeach
</article>

@endsection