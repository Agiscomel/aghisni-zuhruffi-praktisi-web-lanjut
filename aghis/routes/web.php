<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "AGHISNI ZUHRUFFI",
        "image" => "\img\profile.jpg",
        "email" => "a3sagis123@gmail.com",
        "alamat" => "Banyuwangi"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul",
            "author" => "Sambo",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus voluptatum assumenda quas eligendi eveniet nihil explicabo, asperiores obcaecati molestias aliquid, voluptas perferendis, tenetur voluptate magnam blanditiis adipisci velit possimus nemo."
        ],
        [
            "title" => "Judul",
            "author" => "Sambo",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus voluptatum assumenda quas eligendi eveniet nihil explicabo, asperiores obcaecati molestias aliquid, voluptas perferendis, tenetur voluptate magnam blanditiis adipisci velit possimus nemo."
        ],
    ];
    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});
