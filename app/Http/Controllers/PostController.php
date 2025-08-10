<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Detail Post",
            "postingan" => $post
        ]);
    }

    public function create()
    {
        return view('dashboard.create', [
            "title" => "Tambah Post"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'price' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        Post::create($validatedData);

        return redirect('/posts')->with('success', 'Post baru berhasil ditambahkan!');
    }
}
