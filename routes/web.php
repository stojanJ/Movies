<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovisesController;

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

Route::get('/posts', [MovisesController::class, 'index']);
Route::get('/posts/{id}', [MovisesController::class, 'show'])->name('single-moive');