@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl text-white font-bold">
            Update Movie
        </h1>
    </div>
</div>

@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto pt-20">
    <form 
        action="/movies/{{ $movie->slug }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input 
            type="text"
            name="title"
            value="{{ $movie->title }}"
            class="bg-transparent block border-b-2 w-full h-20 text-6xl text-white outline-none">
        <input 
            type="text"
            name="director"
            value="{{ $movie->director }}"
            class="bg-transparent block border-b-2 w-full h-20 text-4xl text-white outline-none">

        <input 
            type="text"
            name="actors"
            value="{{ $movie->actors }}"
            class="bg-transparent block border-b-2 w-full h-20 text-4xl text-white outline-none">

        <textarea 
            name="description"
            placeholder="Description..."
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-white text-xl outline-none">{{ $movie->description }}</textarea> 

        <button    
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Submit Movie
        </button>
    </form>
</div>

@endsection