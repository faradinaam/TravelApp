<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        // menggunakan [] untuk menyimpan data. Menggunakan array
        "title" => "About",
        "name" => "Faradina Anggraeni",
        "name2" => "FAM",
        "email" => "faradinamaroef@gmail.com",
        "img" => "faradina.jpg",
        "img2" => "white.png",
    ]);
});

// Read (menampilkan semua data)
Route::get('/posts', [PostController::class, 'index']);




//halaman single post
/*
1. diarahkan ke halaman posts
    posts/ {slug}
2. Tambahkan Wild card untuk mengambil apapun isi dari slash.
    {slug}
3. Tambahkan parameter di dalam function.

*/

//ini menggunakan controller.
//cara untuk menggunakan slug.
Route::get('posts/{post:slug}', [PostController::class, 'show']);


Route::get('/dashboard', function () {
    return view('dashboard.index', [
        "title" => "Dashboard"
    ]);
});
// // Create (form tambah)
// Route::get('/dashboard/posts/create', [PostController::class, 'create']);
// Route::post('/dashboard/posts', [PostController::class, 'store']);

// // Edit (form edit)
// Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
// Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');

// // Delete (hapus data)
// Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');



// routes/web.php
Route::get('/dashboard/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/dashboard/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/dashboard/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/dashboard/posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/dashboard/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/dashboard/posts', [PostController::class, 'index'])->name('dashboard.posts.index');

Route::get('dashboard/posts/manage', [PostController::class, 'manage'])->name('posts/manage');


// Route::get('/posts/manage', [PostController::class, 'manage'])->name('posts.manage');
