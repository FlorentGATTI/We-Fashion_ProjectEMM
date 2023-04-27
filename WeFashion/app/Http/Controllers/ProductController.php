<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


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

        return view('accueil', ["products" => $products]);
    }
}
