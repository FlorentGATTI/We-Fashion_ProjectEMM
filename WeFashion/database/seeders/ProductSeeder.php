<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $categories = Category::all();

        for ($i = 1; $i <= 80; $i++) {
            $category = $categories->random();

            $product = new Product([
                'name' => 'Product '.$i,
                'description' => 'Description for Product '.$i,
                'price' => rand(1000, 5000) / 100,
                'sizes' => ['XS', 'S', 'M', 'L', 'XL'],
                'image' => 'product-'.$i.'.jpg',
                'published' => true,
                'status' => $i % 2 == 0 ? 'solde' : 'standard',
                'reference' => 'REF'.str_pad($i, 3, '0', STR_PAD_LEFT).'-'.str_random(10),
            ]);

            $product->category()->associate($category);

            Storage::copy('seeds/products/product-'.$i.'.jpg', 'public/products/product-'.$i.'.jpg');

            $product->save();
        }
    }
}

