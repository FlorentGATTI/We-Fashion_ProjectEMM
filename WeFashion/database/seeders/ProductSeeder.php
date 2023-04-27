<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Database\Factories\ProductFactory;



class ProductSeeder extends Seeder
{
    public function run()
    {
        
        Product::factory(80)->create();

    }
}

