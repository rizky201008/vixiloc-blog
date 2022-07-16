<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        return view('welcome',[
            'title'=>'Welcome'
        ]);
    }
    public function posts()
    {
        return view('posts.posts', [
            'title' => 'Postingan'
        ]);
    }
    public function categories()
    {
        return view('posts.categories', [
            'title' => 'Kategori'
        ]);
    }
}
