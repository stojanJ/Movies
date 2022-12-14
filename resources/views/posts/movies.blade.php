@extends('layouts.master')

@section('title', 'Movie')

@section('content')

@include('partials.side-bar',['movies' => $sidebarMovies])
    <ul>
            @foreach ($movies as $movie)
            <div class="col-md-12">
                <div class="card mb-4 box-shadow">
                  <div class="card-body">
                    <p class="card-text"> 
                        <li>
                        <a href="{{ route('single-moive', [ 'id' => $movie->id ]) }}">
                            {{ $movie->title }}
                        </a><br>
                        <a href= "{{ route('genre',['genre' => $movie->genre])}}">{{ $movie->genre }} </a><br>
                        {{ $movie->storyline}}
                    </li></p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" onclick ="{{ route('single-moive', [ 'id' => $movie->id ]) }}" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                      </div>
                      <small class="text-muted"></small>
                    </div>
                  </div>
                </div>
              </div>
                
            @endforeach
    </ul>
@endsection