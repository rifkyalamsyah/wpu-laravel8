<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rifky Alamsyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni libero odit suscipit iure, impedit perspiciatis esse commodi neque quis? Temporibus exercitationem magni ipsam voluptate dolorem consequatur doloribus aliquam totam dolorum dolor fuga dignissimos perferendis nisi id, aliquid laboriosam odit fugiat quas culpa in architecto tenetur? Pariatur in iure consequuntur exercitationem.
            "
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Kevin Indrawan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni libero odit suscipit iure, impedit perspiciatis esse commodi neque quis? Temporibus exercitationem magni ipsam voluptate dolorem consequatur doloribus aliquam totam dolorum dolor fuga dignissimos perferendis nisi id, aliquid laboriosam odit fugiat quas culpa in architecto tenetur? Pariatur in iure consequuntur exercitationem.
            "
        ],
    ];


    public static function all()
    {
        return collect(self::$blog_posts);
    }


    public static function find($slug)
    {
        $posts = static::all();

        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
