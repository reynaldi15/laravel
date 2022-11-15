<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


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
    return view('home',[
        "title"=> "home"
    ]);
});
Route::get('/about', function () {
    return view('about',[
        "title" => "about",
        "name"=> "helena",
        "email"=> "helena@gmal.com"
    ]);
});
Route::get('/post', [PostController::class,'index']);

// halaman sigle post
Route::get('posts/{slug}', [PostController::class,'show']);