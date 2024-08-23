<?php

use App\Models\category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ["title" => "Home Page"]);
});

Route::get('/about', function () {
    return view('about', ["name" => "Kafka", 'title' => 'About Page']);
});

Route::get('/posts', function(){
    return view('posts', ["title" => "Blog Page", 'posts' => Post::all()]);
});

//slug representasi dari nama tabel
Route::get('/posts/{post:slug}', function(Post $post){
    //mengambil id dari posts
    // $post = Post::find($post);
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function(User $user){
    return view('posts', ['title' => count($user->posts). ' Articles by '. $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', ['title' => count($category->posts). ' Articles in '. $category->category, 'posts' => $category->posts]);
});

Route::get('/contact', function(){
    return view('contact', ["name" => "Elaina", 'title' => 'Contact Page']);
});
