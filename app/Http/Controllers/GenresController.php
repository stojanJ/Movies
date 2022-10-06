<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class GenresController extends Controller
{
    public function index()
    {
        info('test');
      
    }

    public function show($genre) {        
        $movies = Movie::where(['genre' => $genre])->get();
        return view('posts.movies', compact('movies'));
    }
}