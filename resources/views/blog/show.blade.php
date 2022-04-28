@extends('layouts.app')

@section('content')
<div class="w-4/6 m-auto text-left" id="BG">
        <img src="{{ asset('images/' . $post->image_path) }}" alt="" id="img_BG">
    <div class="py-10">
        <a      href="/blog"
                class="uppercase bg-gray-900 text-white text-lg font-bold py-2 px-4 rounded-3xl">
                back
            </a>
        <h1 class="text-5xl text-white font-bold" style="margin-left: 20px; margin-top:20px;">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/6 m-auto ">
    <p class="text-xl text-white pt-10 pb-10 leading-8 font-light" style="margin-left: 20px">
        {{ $post->description }}
    </p>
    <span class="text-gray-100" style="margin-left: 20px">
        By <span class="font-bold italic text-gray-500">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>
</div>

@endsection 