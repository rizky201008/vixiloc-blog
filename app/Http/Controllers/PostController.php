<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.posts', [
            'title' => 'Postingan'
        ]);
    }
    public function post($slug)
    {
        $posts = Post::where('slug','=',$slug);
        return view('posts.post',[
            'title'=>'Postingan'
        ]);
    }
}
