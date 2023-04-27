<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}


// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Product;

// class ProductController extends Controller
// {
//     public function index()
//     {
//         $products = Product::latest()->paginate(6);

//         return view('products.index', compact('products'));
//     }

//     public function show(Product $product)
//     {
//         return view('products.show', compact('product'));
//     }
// }

