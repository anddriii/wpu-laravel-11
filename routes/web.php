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
    //mengatasi N + 1 problem  // agar query lebih sedikit
    // $posts = Post::with(['author', 'category'])->latest()->get();
    return view('posts', ["title" => "Blog Page", 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(9)->withQueryString()]);
});

//slug representasi dari nama tabel
Route::get('/posts/{post:slug}', function(Post $post){
    //mengambil id dari posts
    // $post = Post::find($post);
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function(User $user){
    // $posts = $user->posts->load('category', 'author');
    return view('posts', ['title' => count($user->posts). ' Articles by '. $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    //eager loading
    // $posts = $category->posts->load('category', 'author');
    return view('posts', ['title' => count($category->posts). ' Articles in '. $category->category, 'posts' => $category->posts]);
});

Route::get('/contact', function(){
    return view('contact', ["name" => "Elaina", 'title' => 'Contact Page']);
});
