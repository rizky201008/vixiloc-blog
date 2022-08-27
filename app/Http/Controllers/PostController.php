<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('posts.posts', [
            'title' => 'Postingan',
            'post' => $post
        ]);
    }
    public function post($slug)
    {
        $posts = Post::where('slug','=',$slug);
        return view('posts.post',[
            'title'=>$posts['title'],
            'posts' => $posts
        ]);
    }
}
