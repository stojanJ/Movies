<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovisesController;
use App\Models\Movie;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\GenresController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('posts/movies', [MovisesController::class, 'store']);
Route::get('/posts/movies', [MovisesController::class, 'index']);
Route::get('/posts/movies/{id}', [MovisesController::class, 'show'])->name('single-moive');

Route::get('/posts/create' , [ MovisesController::class ,'create']);

Route::post('/posts/movies/{id}/comments', [CommentsController::class, 'store']);

Route::get('/posts/movies/genre/{genre}', [GenresController::class, 'show'])->name('genre');
