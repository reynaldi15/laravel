<?php

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
        "name"=> "helenas",
        "email"=> "helena@gmal.com"
    ]);
});
Route::get('/post', function () {
    $blog_post=[
        [
            "title"=>" judul post pertama",
            "slug"=>"judul-post-pertama",
            "author"=>" helena",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium officiis nihil fugiat ratione quo eos aspernatur eum aliquam reiciendis quidem! Enim repudiandae quia eius sint reprehenderit reiciendis consequuntur at exercitationem unde sequi iure consectetur cupiditate magni nemo, doloremque maiores harum odit fuga. Facere nulla nostrum architecto reiciendis, distinctio quaerat laudantium officia rerum libero corrupti dolorem blanditiis dolore numquam natus veniam debitis unde? Dolor totam possimus hic magni 
            reprehenderit atque itaque exercitationem voluptates! Molestias debitis tenetur, maiores mollitia sapiente laboriosam minus."   
        ],
        [
        "title"=>" judul post kedua",
        "slug"=>"judul-post-kedua",
        "author"=>" helena",
        "body"=>"
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem similique ex reiciendis saepe tempore excepturi esse ducimus maiores atque ullam, quasi soluta optio deserunt dolorum et vitae, quam cupiditate! Adipisci, eos quidem molestiae eveniet laudantium nobis sunt vitae atque doloribus dolore aperiam voluptates magnam esse velit quibusdam animi, dolores alias repudiandae? Ex adipisci quibusdam vel? Voluptates eaque atque esse molestias enim dolore cumque quo. Nesciunt dolorum suscipit tenetur fugiat illum vero porro aliquam qui eos ea dolore aspernatur quas a harum facere ad 
        dignissimos architecto est, natus obcaecati debitis at ex itaque! Ab dolorem sunt veniam veritatis eum sit distinctio!"
        ]
    ];
    return view('posts',[
        "title"=>"News",
        "blog"=>$blog_post

    ]);
});


// halaman sgle post
Route::get('posts/{slug}', function($slug){
    return view('blog',[
        "title"=>"Single Post",
    ]);
});