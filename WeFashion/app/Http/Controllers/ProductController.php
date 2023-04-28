<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('accueil', ["products" => $products]);
    }

    public function filter(Request $request)
    {
        $products = Product::query();

        $category_id = $request->get('category_id');

        if ($category_id) {
            $products->where('category_id', $category_id);
        }

        if ($request->has('state')) {
            $products->where('state', 'en solde');
        }

        $products = $products->paginate(6);

        $products->appends($request->query());

        return view('accueil', ["products" => $products]);
    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('product', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();

        return view('edit_product', compact('product', 'categories'));
    }


    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->state = $request->state;

        $product->save();

        return redirect()->route('dashboard', $product->id);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('dashboard');
    }

    public function create()
    {
        $categories = Category::all();

        return view('add_product', compact('categories'));
    }
}
