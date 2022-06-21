<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Rifky Alamsyah',
        //     'email' => 'rifkyalamsyah30@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Kevin indrawan',
        //     'email' => 'kevinindrawan@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit quo veritatis impedit adipisci sed fugit molestias sint enim? Quisquam ex',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit quo veritatis impedit adipisci sed fugit molestias sint enim? Quisquam ex mollitia cum cupiditate quis voluptates ut aperiam, quia sint. Aut porro neque, unde dolorem impedit tempora rerum consectetur atque velit itaque eaque cumque, quasi quia nisi voluptate maiores aliquid dolores, vero fugit! Ipsam facilis, beatae atque molestias unde rem iste totam esse illo ad magni cum architecto, ducimus tempore magnam neque explicabo tempora amet eius nam nisi laboriosam aperiam? Perferendis nihil ut molestias ipsum quod corporis voluptates impedit itaque repellat aut ad optio tempora, suscipit non dicta exercitationem eaque. Quis odio, vel commodi voluptatem, ut hic et ea repellat nobis soluta dicta illum ex facere molestiae voluptatum, architecto provident. Non.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit quo veritatis impedit adipisci sed fugit molestias sint enim? Quisquam ex',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit quo veritatis impedit adipisci sed fugit molestias sint enim? Quisquam ex mollitia cum cupiditate quis voluptates ut aperiam, quia sint. Aut porro neque, unde dolorem impedit tempora rerum consectetur atque velit itaque eaque cumque, quasi quia nisi voluptate maiores aliquid dolores, vero fugit! Ipsam facilis, beatae atque molestias unde rem iste totam esse illo ad magni cum architecto, ducimus tempore magnam neque explicabo tempora amet eius nam nisi laboriosam aperiam? Perferendis nihil ut molestias ipsum quod corporis voluptates impedit itaque repellat aut ad optio tempora, suscipit non dicta exercitationem eaque. Quis odio, vel commodi voluptatem, ut hic et ea repellat nobis soluta dicta illum ex facere molestiae voluptatum, architecto provident. Non.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit quo veritatis impedit adipisci sed fugit molestias sint enim? Quisquam ex',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit quo veritatis impedit adipisci sed fugit molestias sint enim? Quisquam ex mollitia cum cupiditate quis voluptates ut aperiam, quia sint. Aut porro neque, unde dolorem impedit tempora rerum consectetur atque velit itaque eaque cumque, quasi quia nisi voluptate maiores aliquid dolores, vero fugit! Ipsam facilis, beatae atque molestias unde rem iste totam esse illo ad magni cum architecto, ducimus tempore magnam neque explicabo tempora amet eius nam nisi laboriosam aperiam? Perferendis nihil ut molestias ipsum quod corporis voluptates impedit itaque repellat aut ad optio tempora, suscipit non dicta exercitationem eaque. Quis odio, vel commodi voluptatem, ut hic et ea repellat nobis soluta dicta illum ex facere molestiae voluptatum, architecto provident. Non.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit quo veritatis impedit adipisci sed fugit molestias sint enim? Quisquam ex',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit quo veritatis impedit adipisci sed fugit molestias sint enim? Quisquam ex mollitia cum cupiditate quis voluptates ut aperiam, quia sint. Aut porro neque, unde dolorem impedit tempora rerum consectetur atque velit itaque eaque cumque, quasi quia nisi voluptate maiores aliquid dolores, vero fugit! Ipsam facilis, beatae atque molestias unde rem iste totam esse illo ad magni cum architecto, ducimus tempore magnam neque explicabo tempora amet eius nam nisi laboriosam aperiam? Perferendis nihil ut molestias ipsum quod corporis voluptates impedit itaque repellat aut ad optio tempora, suscipit non dicta exercitationem eaque. Quis odio, vel commodi voluptatem, ut hic et ea repellat nobis soluta dicta illum ex facere molestiae voluptatum, architecto provident. Non.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
