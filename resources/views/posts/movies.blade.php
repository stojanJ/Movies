@extends('layouts.master')

@section('title', 'Movie')

@section('content')
    <ul>
            @foreach ($movies as $movie)
            <div class="col-md-12">
                <div class="card mb-4 box-shadow">
                  <div class="card-body">
                    <p class="card-text"> 
                        <li>
                        <a href="{{ route('single-moive', [ 'id' => $movie->id ]) }}">
                            {{ $movie->title }}
                        </a>
                        {{ $movie->storyline}}
                    </li></p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" onclick ="{{ route('single-moive', [ 'id' => $movie->id ]) }}" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                      </div>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>
                
            @endforeach
    </ul>
@endsection