<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('listcategories', compact('categories'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories',
            'description' => 'required',
        ]);

        $category = Category::create($request->all());

        return redirect()->route('index')->with('success', 'La catégorie a bien été créée.');
    }

    public function edit(Category $category)
    {
        return view('edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,
            'description' => 'required',
        ]);

        $category->update($request->all());

        return redirect()->route('index')->with('success', 'La catégorie a bien été modifiée.');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('index')->with('success', 'La catégorie a bien été supprimée.');
    }
}
