<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post_
{
    private static $travel_post = [
        [

            "title" => "Perjalanan ke Mekkah",
            "slug" => "perjalanan-ke-mekkah",
            "price" => "50.000.000",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores similique ipsum nisi quo doloribus. Odio totam commodi, vel placeat quod ea rerum quisquam numquam eaque minima necessitatibus dicta fugiat ipsum harum debitis, praesentium iure! Natus officiis temporibus velit fuga voluptates perferendis obcaecati reprehenderit, doloremque nostrum corrupti illum provident voluptate aliquam hic praesentium earum modi minima, nam odit? Illum nulla, eligendi atque nostrum a dignissimos, quod, in maiores quis qui nihil quisquam molestias minima et esse. Eius totam modi dolorum necessitatibus libero sint quas ratione amet aspernatur ex, sequi culpa saepe neque ab voluptatum nostrum ipsa laborum iusto doloribus enim repellat."
        ],
        [
            "title" => "Perjalanan ke Madinah",
            "slug" => "perjalanan-ke-madinah",
            "price" => "20.000.000",
            "desc" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe quos quidem fugiat corrupti esse qui quo aperiam, voluptatibus eum beatae harum praesentium impedit error porro nobis cum nihil, dolores natus commodi suscipit vero, tempore itaque illo delectus! Natus possimus commodi excepturi voluptatum, repellat distinctio vel aliquam numquam optio hic quisquam facere eligendi? Amet, tempora ex ea inventore tenetur quam, iure molestias magnam, possimus nesciunt qui. Optio sequi, dolor repellendus aliquam consequuntur fugiat quam deleniti illum nobis laboriosam quas, ab minima."
        ]

    ];

    public static function all()
    {
        /*
        klo properti biasa pake : 'this->'
        klo properti static pake : 'self::'
        */

        //Penggunaan pake collection dari laravel
        // return self::$travel_post;
        return collect(self::$travel_post);
    }

    public static function find($slug)
    {
        $posts = static::all();

        /*
        ambil semua postnya, trs dilooping menggunakan 'foreach' lalu direpresentasikan dalam $Post.
        kalau slugnya sama dengan slug yg dikirim ke parameter maka masukkan postingan tsb ke dalam variable post klo ketemu.
        */
        //sudah tidak memakai ini karna bisa menggunakan collect (collection) dari fungsi laravel
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);

    }
}
