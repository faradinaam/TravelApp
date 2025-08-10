@extends('layouts.main')

@section('content')
{{-- pakai ini untuk menmanggil data yang tersimpan. --}}
<h1>Selamat datang, {{ $name }}</h1>
{{-- menggunakan {{  }} untuk memanggil data menggunakan templating blade dari laravel --}}
<h3>Hi, {{ $name2 }}</h3>
<h4>Email yang kamu gunakan saat ini adalah {{ $email }}</h4>
<p>faradinamaroef@gmail.com</p>
<img src="img/{{ $img2 }}" alt="{{ $name2 }}" width="200" class="img-thumbnail rounded-circle">
@endsection

