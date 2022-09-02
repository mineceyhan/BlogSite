<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;

class CategoryController extends Controller
{
    public function index($id)
    {
        $categories = Category::all();
        $blogs = Blog::with('categories', 'users')->where('category_id' , $id)->get();
        return view('front.category', compact('categories', 'blogs'));
    }
}
