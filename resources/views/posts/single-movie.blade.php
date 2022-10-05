@extends('layouts.master')

@section('title', $movie->title)

@section('content')
    <div class="blog-post">
        <h2 class="blog-post-title">{{ $movie->title }}</h2>
        <p class="blog-post-meta">{{$movie->year_of_production}} <a href="#">{{$movie->directior}}</a></p>
        
        <p>{{ $movie->storyline }}</p>
    </div>
@endsection