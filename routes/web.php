<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ["name" => "Elaina"]);
});

Route::get('/blog', function(){
    return view('blog');
});

Route::get('/contact', function(){
    return view('contact', ["name" => "Elaina"]);
});

//buat 2 route
// 1. /blog yang berisi 2 buah artike, judul dan isi
//2. /contact isi email / sosmed