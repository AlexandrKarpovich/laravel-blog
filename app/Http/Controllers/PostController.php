<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::where('is_published', 1)->get();
        foreach ($posts as $post) {
            dump($post->title);
        }
        dd('end');
    }

    public function create() {
        $postsArr = [
            [
                'title' => 'title of post from php',
                'content' => 'some intersting content',
                'image' => 'imageble',
                'likes' => 20,
                'is_published' => 1,
            ],
            [
                'title' => 'title 2 of post from php',
                'content' => 'some 2 intersting content',
                'image' => 'imagebleffff',
                'likes' => 30,
                'is_published' => 1,
            ]
        ];

        Post::created([
            'title' => 'title 2 of post from php',
            'content' => 'some 2 intersting content',
            'image' => 'imagebleffff',
            'likes' => 30,
            'is_published' => 1,
        ]);

        dd('created');
    }
}
