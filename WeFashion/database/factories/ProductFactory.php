<?php

namespace Database\Factories;


use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Generator as Faker;


class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sizes = ['XS', 'S', 'M', 'L', 'XL'];
        $states = ['standard', 'en solde'];
        $categoryIds = Category::pluck('id')->toArray();
        return [
            'name' => fake()->word,
            'short_description' => fake()->text(100),
            'description' => fake()->text,
            'price' => fake()->randomFloat(2, 0, 9999),
            'image' => fake()->imageUrl(),
            'size' => fake()->randomElement($sizes),
            'is_published' => fake()->boolean(),
            'state' => fake()->randomElement($states),
            'reference' => fake()->regexify('[A-Za-z0-9]{16}'),
            'category_id' => fake()->randomElement($categoryIds),
        ];
    }
}
