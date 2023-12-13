<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

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
        Paginator::useBootstrap();
        view()->composer('layouts.site', function($view){
            $categories = Category::all();
            $view->with(compact('categories'));
        });


        view()->composer('sections.popularPosts', function($view){
            $popularPosts = Post::limit(4)->orderBy('view', 'DESC')->get();
            $view->with(compact('popularPosts'));
        });
    }
}


