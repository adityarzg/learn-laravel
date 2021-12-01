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
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Aditya Reza Gusnanda",
        "email" => "adityarzg@gmail.com",
        "img" => "pp_1.png"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

//Halaman Single Post
Route::get('posts/{slug}', [PostController::class, 'show']);
