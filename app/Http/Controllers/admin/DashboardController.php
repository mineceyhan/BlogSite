<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function index()
    {
        if(session('id') == NULL){
            return view('auth/login');
        }
        $categories = Category::all();
        $blogs = Blog::with('categories', 'users')->where('user_id' , session('id'))
            ->orderBy('updated_at', 'DESC')
            ->paginate(5);
        return view('admin.dashboard', compact('categories', 'blogs'));
    }

    public function category($id)
    {
        $categories = Category::all();
        $blogs = Blog::with('categories', 'users')->where('user_id' , session('id'))
            ->where('category_id', $id)
            ->get();
        return view('admin.category', compact('categories', 'blogs'));
    }

    public function update($id, Request $request)
    {
        $categories = Category::all();
        $blogs = Blog::with('categories', 'users')
            ->where('id', $id)
            ->get();
        return view('admin.update', compact('categories', 'blogs'));
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        if ($blog != null) {
            $blog->delete();
            return redirect()->route('panel');
        } else {
            return 'Data bulunamamaktadır.';
        }
    }
    public function updatePost(Request $request)
    {
        $fields = $request->validate([
             'content' => 'required|string'
         ]);
                
         $blog = Blog::find($request->input('id'));
         $blog->content = $fields['content'];
         $blog->save();

        return redirect()->route('panel');
    }


    public function insertPage(Request $request)
    {
        $categories = Category::all();
        return view('admin.insert', compact('categories'));
    }
    public function insert(Request $request)
    {
        $fields = $request->validate([
           'title' =>  'required|string',
            'content' => 'required|string',
            'category' => 'required|string'
        ]);
      $category=  Category::select('id')->where('name' , $fields['category'])->get();
        array_values((array)$category); 
        Blog::create([
            'title' => $fields['title'],
            'content' => $fields['content'],
            'photo_link' => 'https://upload.wikimedia.org/wikipedia/commons/6/62/Sunrise_at_Lake_Bled.jpg',
            'category_id' => $category[0]['id'],
            'user_id' => session('id')
        ]);
        return redirect()->route('panel');
    }
}
