<?php

namespace App\Http\Controllers\Guest;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function post(Request $request)
    {
        $post = Post::query()->where('slug', $request->slug)->first();

        $categories = Category::get();
        $recentPosts = Post::query()->latest()->take(5)->get();

        return view('guest.post', compact('post', 'categories', 'recentPosts'));
    }
}
