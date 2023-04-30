<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Product;
use App\Models\Category;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    // Permet d'acceder  $products et $categories dans toutes mes views
    public function boot(): void
    {
        $products = Product::paginate(15);
        $categories = Category::all();
        View::share('products', $products);
        View::share('categories', $categories);
    }
}
