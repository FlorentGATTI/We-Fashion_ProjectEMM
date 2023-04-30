<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


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
            //Choix du dossier selon la category_id
            $folder = ($product->category_id === 1) ? 'hommes' : 'femmes';

            //Recupération de l'image aléatoire dans le dossier
            $images = File::files("public/storage/$folder");
            if (count($images) > 0) {
                $image = $images[array_rand($images)];
            }
            //Sauvegarde de l'image
            if (isset($image)) {
                $product->image = asset('storage/' . $folder . '/' . $image->getFilename());
            }
            $product->save();
        });
    }
}
