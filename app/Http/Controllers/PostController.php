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

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('dashboard.posts.edit', compact('post'));
    }

    // PROSES UPDATE
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = Post::findOrFail($id);
        $post->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect()->route('dashboard.posts.index')->with('success', 'Post berhasil diperbarui!');
    }

    // HAPUS DATA
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('dashboard.posts.index')->with('success', 'Post berhasil dihapus!');
    }

    public function manage()
    {
        $posts = Post::all(); // atau bisa pake paginate
        return view('dashboard.posts.manage', compact('posts'));
    }

}
