<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Models\Category;
use \App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index',compact('posts'));
    }

    public function store()
    {
        $categorias = Category::all();
        return view('admin.posts.store',compact('categorias'));
    }
}
