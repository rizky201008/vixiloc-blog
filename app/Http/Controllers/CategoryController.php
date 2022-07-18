<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.categories', [
            'title' => 'Semua Kategori'
        ]);
    }
    public function category($slug)
    {
        $categories = Category::where('slug', '=', $slug);
        return view('categories.category', [
            'title' => 'Kategori',
            'categories'=>$categories
        ]);
    }
}
