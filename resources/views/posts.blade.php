{{-- @dd($posts) --}}

@extends('layouts.main')
@section('content')
{{-- Untuk mengulang menggunakan @foreach ( $variable as $single variable)

@endforeach
--}}
    @foreach ($posts as $post)
        <article class="mb-5">
            {{--
            1. h2 ditambahkan tag a supaya menjadi link dan diarahkan ke halaman berikutnya unuk melihat postitngan yg full.
            Fungsinya
            "/posts/"
            akan mengarah ke halaman post tapi sekarang punya paramater.
            slug ini menjadi paramternya.
            2. Buat slug di web.php
            penjelasan slug ada di file web.php
            3. Setelah menambahkan slug, penulisan untuk memanggil data nya adalah:
             {{ $post ["slug"] }}
              maksudnya => panggil data posts dengan key slug

            4. Mengatur routes (rute) agar dapat menampilkan halaman ketika judul di klik. (langkah dan penjelasan ada di file web.php)

            --}}
        <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <h5> {{ $post->price}}</h5>
        <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection
