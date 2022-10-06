<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Movie;

class CommentsController extends Controller
{
    public function store($id){
        Movie::find($id)->comments()->create([
            'content' => request('content')
        ]);
        
        return redirect()->back();
    }
}
