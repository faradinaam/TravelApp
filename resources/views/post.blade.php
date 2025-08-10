@extends('layouts.main')

@section('content')
    <article>
        <h2>{{ $postingan->title }}</h2>

        <h5>{{ $postingan->price }}</h5>

        {{-- ini karena dalam database menggunakan paragraf --}}
        {!! $postingan->body !!}
    </article>

    <a href="/posts">Back to post</a>
@endsection



