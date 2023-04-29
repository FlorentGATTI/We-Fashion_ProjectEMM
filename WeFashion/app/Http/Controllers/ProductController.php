<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Pagination\Paginator;

class ProductController extends Controller
{
    // public function index()
    // {
    //     $products = Product::paginate(6);
    //     return view('accueil', compact('products'));
    // }

    public function index(Request $request)
    {
        $products = Product::paginate(6);
        $productsCount = Product::count();

        return view('accueil', compact('products', 'productsCount'));
    }

    public function filter(Request $request)
    {
        $products = Product::query();
        $productsCount = Product::count();

        $category_id = $request->get('category_id');

        if ($category_id) {
            $products->where('category_id', $category_id);
        }

        if ($request->has('state')) {
            $products->where('state', 'en solde');
        }

        $products = $products->paginate(6);

        $products->appends($request->query());

        return view('accueil', compact('products', 'productsCount'));
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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'short_description' => 'required',
            'price' => 'required',
            'category_id' => 'required|exists:categories,id',
            'state' => 'required|in:standard,en solde',
            'image' => 'required|image|max:2048'
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->short_description = $request->input('short_description');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');
        $product->state = $request->input('state');
        $product->image = $imageName;
        $product->is_published = $request->input('is_published') ? 1 : 0;
        $product->reference = $request->input('reference');
        $product->save();

        return redirect()->route('dashboard')->with('success', 'Le produit a été créé avec succès');
    }
}
