<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //bisa dipakai salah satu. mau fillable atau guarded.
    protected $fillable = ['title', 'slug', 'price', 'excerpt', 'body'];

    protected $guarded = ['id'];
}
