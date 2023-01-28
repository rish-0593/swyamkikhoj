<?php

namespace App\Http\Controllers\Guest;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Category::get();

        $bannerPosts = Post::query()->inRandomOrder()->take(10)->get();
        $posts = Post::query()->latest()->take(3)->get();
        $recentPosts = Post::query()->latest()->take(5)->get();

        return view('guest.home', compact('categories', 'bannerPosts', 'posts', 'recentPosts'));
    }

    public function about()
    {
        return view('guest.about');
    }

    public function contact()
    {
        return view('guest.contact');
    }
}
