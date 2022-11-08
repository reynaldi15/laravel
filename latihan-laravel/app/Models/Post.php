<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     // use HasFactory;
// }

class Post {
    private static $blog_post=[
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
        "author"=>" samurai",
        "body"=>"
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem similique ex reiciendis saepe tempore excepturi esse ducimus maiores atque ullam, quasi soluta optio deserunt dolorum et vitae, quam cupiditate! Adipisci, eos quidem molestiae eveniet laudantium nobis sunt vitae atque doloribus dolore aperiam voluptates magnam esse velit quibusdam animi, dolores alias repudiandae? Ex adipisci quibusdam vel? Voluptates eaque atque esse molestias enim dolore cumque quo. Nesciunt dolorum suscipit tenetur fugiat illum vero porro aliquam qui eos ea dolore aspernatur quas a harum facere ad 
        dignissimos architecto est, natus obcaecati debitis at ex itaque! Ab dolorem sunt veniam veritatis eum sit distinctio!"
        ]
    ];

    public static function all(){
        return self::$blog_post;
    }

    public static function find($slug){
        $posts = self::$blog_post;

        $post =[];
    foreach($posts as $p){
        if($p["slug"]=== $slug){
            $post = $p;

        }
    }
    return $post; 
    }

}

