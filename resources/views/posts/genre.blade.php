
@extends('layouts.master')

@section('title', $movies->genre)

@include('partials.side-bar',['movies' => $sidebarMovies])

@section('content')

@foreach ($movies as $movie)
    <div class="blog-post">
        <h2 class="blog-post-title">{{ $movie->title }}</h2>
        <p class="blog-post-meta">{{$movie->year_of_production}} <a href="#">{{$movie->directior}}</a></p>
        
        <p>{{ $movie->storyline }}</p>
@endforeach

@endsection
