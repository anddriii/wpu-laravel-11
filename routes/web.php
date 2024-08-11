<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Home Page"]);
});

Route::get('/about', function () {
    return view('about', ["name" => "Kafka", 'title' => 'About Page']);
});

Route::get('/blog', function(){
    return view('blog', ["title" => "Blog Page"]);
});

Route::get('/contact', function(){
    return view('contact', ["name" => "Elaina", 'title' => 'Contact Page']);
});

//buat 2 route
// 1. /blog yang berisi 2 buah artike, judul dan isi
//2. /contact isi email / sosmed