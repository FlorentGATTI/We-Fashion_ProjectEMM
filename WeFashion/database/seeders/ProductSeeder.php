<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();

        Product::factory(80)->create()->each(function ($product) use ($categories) {
            $category = $categories->random();
            $product->category_id = $category->id;
            $product->save();
        });
    }
}




