<?php

namespace App\Http\Controllers\Admin;

use view;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CategoryController extends Controller
{
    public function Category(){
     $categorey = Category::all();
        return view('admin.pages.categores.category' , compact('categorey'));
    }
    public function add_category(Request $request){
        $category = new  Category;
        $category->name = $request->name;
        $category->slug  = Str::lower(Str::replace(' ', '-', $request->name));
        $category->save();

        $categorey = Category::all();
        return view('admin.pages.categores.category' , compact('categorey'));
    }
}
