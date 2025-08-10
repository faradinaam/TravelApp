<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Post;

class PostController extends Controller
{
    public function index() {
        return view('posts',[
        "title" => "Posts",
        "posts" => Post::all()

    ]);
    }

    public function show(Post $post)      //parameternya itu model yaitu Post dan variable yg menerima harus sama dengan variable yg ada di web.php (routes)
    {
         return view('post', [
        "title" => "travel post",
        "postingan" => $post
    ]);
    }
}
