<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Models\Category;
use \App\Models\Post;
use \App\Models\Tag;

use Carbon\Carbon;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $tags = Tag::all();
        return view('admin.posts.index',compact('posts'));
    }

    public function create()
    {
        $categorias = Category::all();
        $tags = Tag::all();

        return view('admin.posts.store',compact('categorias','tags'));
    }


    public function store(Request $request)
    {
        ##Post::create($request->all());

        $post                   = new Post;
        $post->title            = $request->get('title');
        $post->body             = $request->get('body');
        $post->excerpt          = $request->get('excerpt');
        $post->published_at     = Carbon::parse($request->get('published_at'));
        $post->category_id      = $request->get('category_id');

        $post->save();

        
        return $request->all();
    }
}
