@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-6xl uppercase font-bold text-shadow-lg p-3 mb-5">
                    Movies and there stories
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More!
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://s3-us-west-2.amazonaws.com/prd-rteditorial/wp-content/uploads/2018/03/13153742/RT_300EssentialMovies_700X250.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-white">
                You want to discover more about movies and cinema?
            </h2>
            
            <p class="py-8 text-white text-s">
                Discover all the world and history of cinema through the movies and director who maked this art.
            </p>

            <p class="font-extrabold text-white text-s pb-9">
                A journey into the univers of the one who lived there life 25 frames per seconds
            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-white">
                Lots of movies avalaible...
            </h2>
            
            <p class="py-8 text-white text-lg">
                A videotech in your browser. Log and add the movies you like
            </p>
            <a 
                href="/movies"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Discover
            </a>
        </div>
        <div>
             <a href="/movies">
                <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/fall-movies-index-1628968089.jpg" width="700" alt="">
             </a>
        </div>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-white">
            Movies
        </span>

        <h2 class="text-4xl font-bold py-10 text-white">
            Find your favorite movie in our selection
        </h2>  
        <a 
                href="/movies"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find a movie
            </a>
        
    </div>
    </div>
@endsection