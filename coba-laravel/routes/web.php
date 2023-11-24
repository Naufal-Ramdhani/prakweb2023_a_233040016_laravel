<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view ('home', [
        "title" => "home"
    ]);
});


Route::get('/about', function () {
    return view ('about', [
        "title" => "about",
        "name" => "Naufal Ramdhani",
        "email" => "ramdhaninaufal27@gmail.com",
        "image" => "nflr.jpeg"

    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{slug}', [PostController::class, 'show']);


