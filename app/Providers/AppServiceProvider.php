<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::composer('*', function ($view) {
            $categories = Category::orderBy('id')->where('slug', '!=', 'covid')->get();
            $covid =Category::where('slug', 'covid')->firstOrFail();

            $view->with('categories', $categories)
            ->with('covid', $covid);
        });
    }
}
