<?php

namespace App\Http\Controllers\Admin;

use view;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CategoryController extends Controller
{
    public function list(){
        $category = Category::get();
        return view('admin.pages.category.index', compact('category'));
    }

    public function updateOrCreate(Request $request){
        Category::updateOrCreate(
            [
                'id' => $request->id ?? null,
            ],
            [
                'name' => $request->name,
            ]
        );

        return redirect()->back();
    }

    public function delete($id){
        Category::find($id)->delete();
        return redirect()->back();
     }
}
