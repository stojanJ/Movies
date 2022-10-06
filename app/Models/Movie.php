<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';
    protected $fillable = ['title','storyline','directior','year_of_production','genre'];
     
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
