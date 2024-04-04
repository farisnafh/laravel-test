<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('Posts', [
            "title" => 'Posts',
            "posts" => Post::all()
            // "posts" => \App\Models\Post::all() //cara 2
        ]);
    }

    public function show($slug)
    {
        return view('post',  [
            "title" => "Single Post",
            "post" => Post::find($slug)  
        ]);
    }
}
