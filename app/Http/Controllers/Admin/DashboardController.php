<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $categoryCount = Category::count();
        $postCount = Post::count();

        return view('admin.dashboard', compact('categoryCount', 'postCount'));
    }
}
