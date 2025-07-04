<?php

namespace App\Providers;

use View;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;

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
    public function boot(): void
    {
        $categories1 = Category::where('display_order', 1)->get();
        $categories2 = Category::where('display_order', 2)->get();
        $categories3 = Category::where('display_order', 3)->get();

        View::composer('components.frontend.categories', function ($view)use($categories1, $categories2, $categories3){
            $view->with('categories1', $categories1);
            $view->with('categories2', $categories2);
            $view->with('categories3', $categories3);
        });
    }
}
