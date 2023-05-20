<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    //

    public function store(Request $request)
    {
        $category = new Category;

        $category->name = $request->name;

        $category->save();

        return redirect('dashboard/categories');
    }

    public function update($id, Request $request)
    {
        $category = Category::find($id);

        $category->name = $request->name;

        $category->save();

        return redirect('dashboard/categories');
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->back();
    }
}
