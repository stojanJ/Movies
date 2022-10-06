
@extends('layouts.master')

@section('title', $movie->title)

@section('content')
    <div class="blog-post">
        <h2 class="blog-post-title">{{ $movie->title }}</h2>
        <p class="blog-post-meta">{{$movie->year_of_production}} <a href="#">{{$movie->directior}}</a></p>
        
        <p>{{ $movie->storyline }}</p>

        <div>
            <h4>Comments:</h4>
    
            <ul>
                @foreach($movie->comments as $comment)
                    <li>
                        <p>{{ $comment->content }}</p><br>
                        {{ $comment->created_at }}
                    </li>
                @endforeach
            </ul>        
        </div>
    </div>
    <form method="POST" action="/posts/movies/{{ $movie->id }}/comments">
        @csrf
        
        <div class="mb-3">
            <label class="form-label">Leave a comment:</label>
            <textarea name="content" rows="2" class="form-control"></textarea>
        </div>

        @error('content')
            @include('partials.error')
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
