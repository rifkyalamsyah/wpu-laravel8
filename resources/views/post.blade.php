{{-- @dd($post); --}}

@extends('layouts.main')

@section('container')
    <h2 class="mb-5">{{ $post->title }}</h2>

    <p>By: Rifky Alamsyah in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {!! $post->body !!}

    <a href="/blog">Back to Posts</a>
@endsection
