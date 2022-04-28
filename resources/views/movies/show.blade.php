@extends('layouts.app')

@section('content')

<article id="aff_movies">
        <section id="left">
             <a 
                href="/movies"
                class="uppercase bg-gray-900 text-white text-lg font-bold py-2 px-4 rounded-3xl">
                back
            </a>

            <h1>
                {{ $movie->title }}
            </h1>
            <h2>
                <b>Director : </b> {{ $movie->director }}

            </h2>
            <h2>
                <b>Staring : </b>{{ $movie->actors }}
            </h2>
             <p>
            {{ $movie->description }}
        </p>
        <br>
        <h3>
            By <span>{{ $movie->user->name }}</span>, Created on {{ date('jS M Y', strtotime($movie->updated_at)) }}
        </h3>
            <br>
             @if (isset(Auth::user()->id) && Auth::user()->id == $movie->user_id)
                <span  class="float-left">
                    <a 
                        href="/movies/{{ $movie->slug }}/edit"
                        class="text-gray-50 italic hover:text-gray-900 pb-1 border-b-2">
                        Edit
                    </a>
                </span>

                <span>
                     <form 
                        action="/movies/{{ $movie->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button
                            class="text-red-500 pr-3"
                            type="submit">
                            Delete
                        </button>

                    </form>
                </span>
            @endif
        </section>
        <section id="right">
            <img src="{{ asset('images/' . $movie->poster) }}" alt="">
        </section>
</article>
           
@endsection 