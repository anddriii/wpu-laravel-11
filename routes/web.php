<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Home Page"]);
});

Route::get('/about', function () {
    return view('about', ["name" => "Kafka", 'title' => 'About Page']);
});

Route::get('/posts', function(){
    return view('posts', ["title" => "Blog Page", 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Hotaru',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, maxime tempora. Magni magnam vero deserunt doloribus culpa, amet possimus rem sequi eius itaque laborum nisi natus quae earum minus et.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Elaina',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quod sunt reiciendis quaerat vero fugit eaque inventore blanditiis maxime nemo iure ut placeat, rem magni quo excepturi cum. Eveniet, delectus.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 1',
            'author' => 'Hotaru',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, maxime tempora. Magni magnam vero deserunt doloribus culpa, amet possimus rem sequi eius itaque laborum nisi natus quae earum minus et.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Elaina',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quod sunt reiciendis quaerat vero fugit eaque inventore blanditiis maxime nemo iure ut placeat, rem magni quo excepturi cum. Eveniet, delectus.'
        ]
    ];
    //mengambil id dari posts
    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['id'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function(){
    return view('contact', ["name" => "Elaina", 'title' => 'Contact Page']);
});

//buat 2 route
// 1. /blog yang berisi 2 buah artike, judul dan isi
//2. /contact isi email / sosmed