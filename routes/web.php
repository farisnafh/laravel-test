<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [
        "title" => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => 'About',
        "name" => "Route Data Farisna",
        "email" => "Route@gmail.com",
        "images" => "images1.png",
        "images2" => "images2.png"
    ]);
});

// Routing tanpa controller (metode closure)
// Route::get('/posts', function () {
//     // Ditangani oleh controller
//     return view('Posts', [
//         "title" => 'Posts',
//         // Conneting to App\Models Post.php
//         // mengambil data dari Models
//         "posts" => Post::all() //memanggil method all static untuk mendapatkan semua data Post
//     ]);
// });

// halaman single post tanpa controller
// Route::get('posts/{slug}', function($slug){

//     // not used anymore, nowo used from Models Post.php
//     // $new_post = [];
//     // foreach($blog_posts as $post) {
//     //     if($post["slug"] === $slug){
//     //         $new_post = $post;
//     //     }
//     // }

//     return view('post',  [
//         "title" => "Single Post",
//         // "post" => $new_post  
//         "post" => Post::find($slug)  
//     ]);
// });


// Routing dengan menggunakan controller
Route::get('/posts', [PostController::class, 'index']);
// Routing halaman single post tanpa controller
Route::get('posts/{slug}', [PostController::class, 'show']);