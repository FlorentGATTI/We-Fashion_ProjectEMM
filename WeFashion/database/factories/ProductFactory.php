<?php

use App\Models\Product;
use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $sizes = ['XS', 'S', 'M', 'L', 'XL'];
    $states = ['standard', 'en solde'];
    $categoryIds = Category::pluck('id')->toArray();
    return [
        'name' => $faker->word,
        'short_description' => $faker->text(100),
        'description' => $faker->text,
        'price' => $faker->randomFloat(2, 0, 9999),
        'image' => $faker->imageUrl(),
        'size' => $faker->randomElement($sizes),
        'is_published' => $faker->boolean(),
        'state' => $faker->randomElement($states),
        'reference' => $faker->regexify('[A-Za-z0-9]{16}'),
        'category_id' => $faker->randomElement($categoryIds),
    ];
});
