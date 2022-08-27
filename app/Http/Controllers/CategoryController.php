<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('categories.categories', [
            'title' => 'Semua Kategori',
            'category' => $category
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
