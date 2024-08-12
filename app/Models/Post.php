<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post{
    public static function all(){
        return [
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
        ];
    }

    public static function find($slug): array{
        $post = Arr::first(Post::all(), fn ($post) => $post["slug"] == $slug);
        if(! $post){
            abort(404);
        }
        return $post;
    }
}