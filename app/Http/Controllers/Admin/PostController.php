<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Banner;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class PostController extends Controller
{
    public function list()
    {
        $posts = Post::orderByDesc('id')->get();

        return view('admin.pages.posts.index' , compact('posts'));
    }

    public function add()
    {
        $categories = Category::get();

        return view('admin.pages.posts.create' , compact('categories'));
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'banner'  => 'required'
        ]); //|image|mimes:jpeg,png,jpg,gif,svg|max:2048

        $post = $this->createOrUpdatePost($request);

        return redirect()->back();
    }

    public function createOrUpdatePost(Request $request)
    {
        $post_data = [
            'category_id' => $request->category_id,
            'title' => $request->title,
            'content' => $request->content,
        ];

        $post = Post::updateOrCreate(
            [
                'id' => $request->id ?? null
            ],
            $post_data
        );

        if(!blank($request->banner)){
            $id = Crypt::decrypt($request->banner);
            Banner::find($id)->update(['post_id' => $post->id]);
        }

        return $post;
    }

    public function edit($id)
    {
        $categories = Category::get();
        $post = Post::with('banner')->find($id);

        return view('admin.pages.posts.edit' , compact('categories', 'post'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]); //|image|mimes:jpeg,png,jpg,gif,svg|max:2048

        $post = $this->createOrUpdatePost($request);

        return redirect()->back();
    }

    public function delete($id)
    {
        Post::find($id)->delete();

        return redirect()->back();
    }
}
