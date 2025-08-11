
@extends('dashboard.layouts.main')

@section('container')
    <h1 class="mb-4">Daftar Post</h1>
    <a href="{{ route('dashboard.posts.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Excerpt</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->excerpt }}</td>
                    <td>
                        <a href="{{ route('dashboard.posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('dashboard.posts.destroy', $post->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
