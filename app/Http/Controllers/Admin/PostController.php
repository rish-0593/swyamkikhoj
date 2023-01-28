<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function Posts(){
        $posts = Post::all();
        return view('admin.pages.posts.posts' , compact('posts'));
    }

    public function add_post(){
        $categorys = Category::all();
        return view('admin.pages.posts.createPost' , compact('categorys'));
    }

    public function createPost(Request $request){
        $data=$request->validate([ 
            'category_id'=>'required',
            'title'=>'required',
            'Content' => 'required',
         ]);

        $post = new Post();
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->Content = $request->Content;
        $post->slug =  Str::lower(Str::replace(' ', '-', $request->title));
        $post->save();

        $posts = Post::all();
        return view('admin.pages.posts.posts' , compact('posts'));
    }
}
