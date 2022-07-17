<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('categories.categories', [
            'title' => 'Semua Kategori'
        ]);
    }
    public function category(){

    }
}
