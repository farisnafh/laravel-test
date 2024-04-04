<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [ 
            "title" => "Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Farisna Hamid", 
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis quia iure, perferendis enim quo aut ipsa exercitationem consequatur recusandae ducimus laboriosam incidunt distinctio. Quaerat magni inventore, optio eligendi ad mollitia provident quos! Laborum aspernatur dolorem obcaecati quae id minus autem dolor modi, magni nostrum, perspiciatis fugit assumenda. Commodi, quisquam dolorum voluptatem non pariatur tempora quae excepturi vel omnis quia itaque ea reprehenderit facere quis. Illo ut animi neque sed. Saepe aut voluptate aperiam minima blanditiis, a odio distinctio tempora corrupti?"
        ],
        [ 
            "title" => "Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhammad Akbar", 
            "body" => "File lain yang tak kalah penting dan harus ada dalam sebuah website adalah file .htaccess.
            File .htaccess berfungsi untuk pengaturan konfigurasi pemasangan website pada hosting dan pasti disediakan oleh server Apache.
            Umumnya, file ini terpasang di dalam file root Laravel.
            Apabila ternyata file .htaccess tidak ada di halaman panel kontrol website, misal cPanel, maka tak heran jika kamu menemukan kode Laravel error 500."
        ],
    ];

    public static function all() 
    {
        // using static properties using self::
        // return self::$blog_posts;

        // membungkus array menjadi collection
        return collect(self::$blog_posts);
    }

    public static function find($slug){

        //1. cara dengan manual
        // $posts = self::$blog_posts;  // khusus properti static
        
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        // return $post;


        //2. cara dengan array collection
        $posts = static::all(); // untuk method static

        // search all posts,    first where slug = $slug
        return $posts->firstWhere('slug', $slug); 

    }
}
