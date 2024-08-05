<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
//        $post = Post::find(1);
//        dd($post->likes);
//        dd($post);
//        $posts = Post::all();
        $post = Post::where('is_published', 1)->first();
//        foreach ($posts as $post){
            dump($post->title);
//        }
        dd('end');
    }

    public function create()
    {
        $postsArr = [
            [
                'title' => 'title of post from phpstorm',
                'content' => 'some interesting content',
                'image' => 'imageblalbla.jpg',
                'likes' => 20,
                'is_published' => 1,
            ],
            [
                'title' => 'another title of post from phpstorm',
                'content' => 'another some interesting content',
                'image' => 'another imageblalbla.jpg',
                'likes' => 50,
                'is_published' => 1,
            ],
        ];
        foreach ($postsArr as $item) {
            Post::create($item);
        }

        dd('created');
    }

    public function update()
    {
        $post = Post::find(5);

        $post->update([
            'title' => '1111 updated',
            'content' => '111 updated',
        ]);
        dd("updated");
    }
}
