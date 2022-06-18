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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Rifky Alamsyah",
        "email" => "rifkyalamsyah30@gmail.com",
        "image" => "rifky-pic.png"
    ]);
});


Route::get('/blog', function () {

    $blog_posts = [
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

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman single post
Route::get('posts/{slug}', function ($slug) {

    $blog_posts = [
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

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post,
    ]);
});
