@extends('dashboard.dashboard')

@section('content')
<div class="container">
    <h1>Edit Data</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="text" name="price" class="form-control" value="{{ $post->price }}">
        </div>
        <div class="mb-3">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" value="{{ $post->slug }}">
        </div>
        <div class="mb-3">
            <label>Excerpt</label>
            <input type="text" name="excerpt" class="form-control" value="{{ $post->excerpt }}">
        </div>
        <div class="mb-3">
            <label>Body</label>
            <input type="text" name="body" class="form-control" value="{{ $post->body }}">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
